<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

use App\Models\Account;

use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(LoginRequest $loginRequest){

            $account = Account::where('email', $loginRequest->email)->first();

            if (!$account || !Hash::check( $loginRequest->password, $account->password) || !$account->verify ){
                return $this->commonResponse([],'something went wrong',404);
            };
            $token = $account->createToken('authToken')->plainTextToken;

            return $this->commonResponse([
                'access_token'=> $token,
                'type token' => 'Bearer'
            ],'',200);
    }
}
