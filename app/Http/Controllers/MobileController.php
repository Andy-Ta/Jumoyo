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
}
