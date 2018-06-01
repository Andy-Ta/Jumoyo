<?php

namespace App\Http\Controllers;

use App\Gateways\ClientGateway;
use DB;
use Hash;
use Illuminate\Http\Request;
use stdClass;
use Validator;

class MobileController extends Controller
{
    private $clientGateway;

    public function __construct()
    {
        $this->clientGateway = new ClientGateway();
    }

    public function login(Request $request) {
        $email = $request->input('email');
        $pw = $request->input('password');
        $json = new stdClass();

        $user = $this->clientGateway->authenticate($email);
        if(!empty($user) && Hash::check($pw, $user->password)) {
            $json->token = $this->getMobileToken($email);
            return json_encode($json);
        }
        else {
            $json->error = "Invalid username or password.";
            return json_encode($json);
        }
    }

    public function hash($password) {
        return Hash::make($password);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'lastName' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'email' => 'required|email|unique:clients,email',
            'password' => 'required|confirmed|min:7|max:30',
            'password_confirmation' => 'required|same:password',
            'mobile' => 'required|phone:CA,US',
        ]);

        if ($validator->fails()) {
            $validator->getMessageBag()->add('error', '');
            return response()->json($validator->messages());
        }

        $firstName = $request->input('firstName');
        $lastName  = $request->input('lastName');
        $email     = $request->input('email');
        $pass      = $request->input('password');
        $conf      = $request->input('password_confirmation');
        $mobile    = $request->input('mobile');

        $json = new stdClass();

        if($pass != $conf) {
            $json->error = "Your passwords do not match.";
        }
        else {
            $newPassword = $this->hash($pass);

            if($this->clientGateway->register($firstName, $lastName, $email, $newPassword, $mobile)) {
                $json->token = $this->getMobileToken($email);
            }
            else {
                $json->error = "An error occurred during the registration.";
            }
        }

        return json_encode($json);
    }

    private function getMobileToken($email) {
        $token = DB::table('clients')->where('email', $email)->first()->mobile_token;
        if(!$token) {
            $token = sha1($email);
            DB::table('clients')->where('email', $email)->update(array("mobile_token" => $token));
        }
        return $token;
    }

    public function getServices(Request $request) {
        $name = $request->input('name');
        $json = new stdClass();
        $json->data = $this->clientGateway->getMobileService($name);

        return response()->json($json);
    }

    public function getServicesCategory(Request $request) {
        $name = $request->input('category');
        $json = new stdClass();
        $json->data = $this->clientGateway->getMobileServiceCategory($name);

        return response()->json($json);
    }


    public function getProduct(Request $request) {
        $name = $request->input('id');
        $json = new stdClass();
        $json->data = $this->clientGateway->getService($name);

        return response()->json($json);
    }

    private function getIDFromToken($mobileToken) {
        return DB::table('clients')
            ->where('mobile_token', $mobileToken)
            ->first()->id;
    }

    public function getBookings(Request $request){
        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);
        $json = new stdClass();
        $json->data = $this->clientGateway->getBooking($clientsId);

        if(!empty($json->data)){
            return response()->json($json);
        } else {
            $json->error = "You have no bookings.";
            return response()->json($json);
        }
    }

    public function getFavorites(Request $request){
        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);
        $json = new stdClass();
        $json->data = $this->clientGateway->getFavorites($clientsId);

        if(!empty($json->data)){
            return response()->json($json);
        } else {
            $json->error = "You have no favorites.";
            return response()->json($json);
        }
    }

    public function getClientInfo(Request $request){
        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);
        $json = new stdClass();
        $json->data = $this->clientGateway->getClientInfo($clientsId);

        if(!empty($json->data)){
            return response()->json($json);
        } else {
            $json->error = "No client found.";
            return response()->json($json);
        }
    }

    public function updateClientInfo(Request $request){
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'lastName' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'mobile' => 'required|phone:CA,US',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $mobile = $request->input('mobile');

        $this->clientGateway->updateClientInfo($clientsId, $firstName, $lastName, $mobile);

        //if($this->clientGateway->updateClientInfo($clientsId, $firstName, $lastName, $mobile)){
            return response()->json([
                'success' => 'Info updated.'
            ], 200);
        //}else{
        //    return response()->json([
        //        'error' => 'Something went wrong while updating info.'
        //    ], 500);
        //}
    }

    public function updatePassword(Request $request){
        $validator = Validator::make($request->all(), [
            //'oldPassword' => 'required|min:7|max:30',
            'password' => 'required|confirmed|min:7|max:30',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);
        $oldPassword = $request->input('oldPassword');
        $pass = $request->input('password');

        $userPsw = $this->clientGateway->getPsw($clientsId);
        //if(!empty($userPsw) && Hash::check($oldPassword, $userPsw)) {
            $password = $this->hash($pass);

            if($this->clientGateway->updatePsw($clientsId, $password)) {
                return response()->json([
                    'success' => 'Password updated.'
                ], 200);
            }
            else {
                return response()->json([
                    'error' => 'Something went wrong while updating password.'
                ], 500);
            }
        //}else{
        //    return response()->json([
        //        'error' => 'Your old password was wrong.'
        //   ], 400);
        //}
    }

    public function changeImage(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|max:51200',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $image = $request->hasFile('image');
        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);

        if($image){
            $imageTemp = $request->file('image');
            $imgName = time() . '.' . $imageTemp->getClientOriginalExtension();
            $destinationPath = public_path('img/client/' . $clientsId . '/');
            $filePath = 'img/client/' . $clientsId . '/';
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
            return response()->json([
                'error' => 'No image was selected.'
            ], 400);
        }

        if($this->clientGateway->updateImage($clientsId, $image)){
            return response()->json([
                'success' => 'Image updated.'
            ], 200);
        } else{
            return response()->json([
                'error' => 'Something went wrong while updating image.'
            ], 500);
        }
    }

    public function deleteImage(Request $request){
        $clientsId = $request->input('id');
        $clientsId = $this->getIDFromToken($clientsId);

        if($this->clientGateway->deleteImage($clientsId)){
            return response()->json([
                'success' => 'Image deleted.'
            ], 200);
        } else {
            return response()->json([
                'error' => 'Something went wrong while deleting image.'
            ], 500);
        }
    }

}
