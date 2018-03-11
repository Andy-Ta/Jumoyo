<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePswRequest;
use App\Http\Requests\EditAccountRequest;
use Hash;
use DateTime;
use App\Gateways\ClientGateway;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    private $clientGateway;

    public function __construct()
    {
        $this->clientGateway = new ClientGateway();
    }

    public function getServices(Request $request)
    {
        $name = $request->input('name');
        $city = $request->input('city');

        $results = $this->clientGateway->getServices($name, $city);

        return view('pages.services', ['services' => json_encode((array)$results), 'page' => "Search"]);
    }

    public function register(ClientRequest $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $password = $request->input('password');
        $mobile = $request->input('mobile');

        $newPassword = $this->hash($password);

        $message = "";
        if($this->clientGateway->register($firstName, $lastName, $email, $newPassword, $mobile)) {
            $message = "You have successfully registered.";
        }
        else {
            $message = "An error occurred during the registration.";
        }

        return $message;
    }

    public function product($id) {
        $service = $this->clientGateway->getService($id);
        //$posts = $this->clientGateway->getPostsPreviewByService($id);
        $posts = null;
        if (!empty(session('id'))) {
            $posts = $this->clientGateway->getPostsAndCommentsByService($id);
        }
        $reviews = $this->clientGateway->getReview($id);
        $avgStars = $this->clientGateway->avgStars($id);
        $service->image_url = $this->clientGateway->getImage($id);
        if(!$service->image_url)
            $service->image_url = '/img/services/default.png';
        return view('pages.singleproduct', ['service' => $service,'page' => $service->category, 'reviews' => $reviews, 'avgStars' => $avgStars, 'data' => $posts]);
    }

    public function account() {
        $id = session('id');
        $reviews = $this->clientGateway->reviewById($id);
        $favorites = $this->clientGateway->getFavorites($id);
        $booking = $this->clientGateway->getBooking($id);

        return view('pages.account', ['page' => 'Account', 'reviews' => $reviews, 'bookings' => $booking, 'favorites' => $favorites]);
    }

    public function review(ReviewRequest $request) {
        $time = new DateTime();
        $serviceId = $request->input('serviceId');
        $review = $request->input('review');
        $rating = $request->input('rating');

        if($this->clientGateway->review($serviceId, $review, $rating, $time)) {
            return response('Success.', 200);
        }

        else {
            return abort(400, "An error occurred during the process.");
        }

    }

    public function deleteReview($id){
        if($this->clientGateway->deleteReview($id)){
            return back();
        } else {
            return abort(400, "An error occurred while removing review.");
        }
    }

    function authenticate(Request $request) {
        $email = $request->input('email');
        $pw = $request->input('password');

        $user = $this->clientGateway->authenticate($email);
        if(!empty($user) && Hash::check($pw, $user->password)) {
            $this->createSession($user);
        }
        else {
            abort(400, "Invalid username or password.");
        }

        return null;
    }

    function createSession($user) {
        session()->flush();
        session(['id' => $user->id]);
        session(['email' => $user->email]);
        session(['firstName' => $user->first_name]);
        session(['lastName' => $user->last_name]);
        session(['phone' => $user->mobile]);
        session(['image' => $user->image]);
        session(['businessid' => DB::table('businesses')->where('client', $user->id)->value('id')]);
    }

    public function hash($password) {
        return Hash::make($password);
    }

    public function editAccInfo(EditAccountRequest $request){

        $id = session()->get('id');
        $first_name = $request->input('firstName');
        $last_name = $request->input('lastName');
        //$email = $request->input('email');
        $mobile = $request->input('phone');

        if($this->clientGateway->updateClientInfo($id, $first_name, $last_name, $mobile)){
            session(['firstName' => $first_name]);
            session(['lastName' => $last_name]);
            session(['phone' => $mobile]);
            return redirect('account#d');
        } else {
            return abort(400, "An error occurred while adding contact.");
        }

    }

    public function changePassword(ChangePswRequest $request){
        $id = session()->get('id');
        $currentPassword = $request->input('currentPassword');
        $newPassword = $request->input('newPassword');
        $psw = $this->clientGateway->getPsw($id);
        $password = $this->hash($newPassword);

        if(Hash::check($currentPassword, $psw)){
            if($this->clientGateway->updatePsw($id, $password)){
                return redirect('/logout');
            } else {
                return abort(400, "An error occurred while changing password.");
            }
        }else {
            return abort(400, "Invalid current password.");
        }

    }

    public function changeAccImg(EditAccountRequest $request){
        $image = $request->hasFile('accountimg');
        //$imgT = $request->file("accountimg");
        //dd($imgT);
        $id = session()->get('id');
        if($image){
            $imageTemp = $request->file('accountimg');
            $imgName = time() . '.' . $imageTemp->getClientOriginalExtension();
            $destinationPath = public_path('img/client/' . $id . '/');
            $filePath = 'img/client/' . $id . '/';
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 755, true);
                $imageTemp->move($destinationPath, $destinationPath . $imgName);
                $url = $filePath . $imgName;
            } else {
                $imageTemp->move($destinationPath, $destinationPath . $imgName);
                $url = $filePath . $imgName;
            }
            $image = $url;
        } else{
            return abort(400, "No image was selected.");
        }

        if($this->clientGateway->updateImage($id, $image)){
            session(['image' => $image]);
            return response('Success.', 200);
        } else{
            return abort(400, "An error occurred while changing image.");
        }
    }

    public function deleteAccImage(){
        $id = session()->get('id');
        if($this->clientGateway->deleteImage($id)){
            return redirect('account#d');
        } else {
            return abort(400, "An error occurred while removing contact.");
        }

    }

    // Control for actions related to a service's post
    public function postAction(Request $r, $postid) {
        $actionType = $r->input('action');
        switch ($actionType) {
            case 'like':
                return $this->likeActionHandler($r, $postid);
            case 'comment':
                return $this->commentActionHandler($r, $postid);
            default:
                return abort(400, 'Unsupported action type');
        }
    }

    //helper function
    public function likeActionHandler(Request $r, $postid) {
        if ($this->clientGateway->isPostLiked($postid)) {
            $this->clientGateway->unlikePost($postid);
            return response()->json(array('currentStatus' => false));
        } else {
            $this->clientGateway->likePost($postid);
            return response()->json(array('currentStatus' => true));
        }
    }

    //helper function
    public function commentActionHandler(Request $r, $postid) {
        $text = $r->input('comment.text');
        if (empty($text)) return response("No text specified", 400);

        $this->clientGateway->insertPostComment($postid, $text);

        return $this->getPostComments($postid);
    }

    public function getPostContent($postid) {
        $content = $this->clientGateway->getPostContent($postid);
        $comments = $this->clientGateway->getPostComments($postid);
        return response()->json(array($content, $comments));
    }

    public function getPostComments($postid) {
        $list = $this->clientGateway->getPostComments($postid);
        return response()->json($list);
    }

    public function getService(Request $request) {
        return json_encode($this->clientGateway->getService($request->input('id')));
    }

    public function book(Request $request) {
        $date = $request->input('date');
        $start = $request->input('start');
        $end = $request->input('end');
        $id = $request->input('serviceid');
        $price = $request->input('price');
        $notes = $request->input('notes');
        $token = $request->input('stripeToken');

        if(is_float($price))
            str_replace(".", "", $price);
        else
            $price .= "00";

        $customer = \Stripe\Customer::create([
            'source' => $token,
            'email' => $this->clientGateway->getThisEmail(),
        ]);

        if($this->clientGateway->book($id, $date, $start, $end, $notes, $price, $customer->id)) {
            return "c chill";
        }
        else {
            return "c pas chill";
        }
    }

    public function getPortfolio(Request $request) {
        $id = $request->input('id');

        return json_encode($this->clientGateway->portfolio($id));
    }

    //Favorite related
    public function favService($service_id) {
        $sessionId = session()->get('id');

        if($this->clientGateway->fav($service_id, $sessionId)) {
            return redirect()->back();
        }
        else{
            return abort(400, "An error occurred while favoriting service.");
        }
    }

    public function unfavService($service_id) {
        $sessionId = session()->get('id');
        if($this->clientGateway->unfav($service_id, $sessionId)) {
            return redirect()->back();
        }
        else{
            return abort(400, "An error occurred while unfavoriting service.");
        }
    }

    public function unfavFromAccService($service_id) {
        $sessionId = session()->get('id');
        if($this->clientGateway->unfav($service_id, $sessionId)) {
            return redirect()->back();
        }
        else{
            return abort(400, "An error occurred while unfavoriting service.");
        }
    }
}
