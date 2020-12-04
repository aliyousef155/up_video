<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends ApiController
{
    public  function login(Request $request)
    {
        $creds=$request->only('email','password');
        $token=auth()->attempt($creds);
        if (!$token=auth()->attempt($creds)){
            return response()->json(['error'=>'invalid email\password']);
        }
        return response()->json(['token'=>$token]);

    }//end of login

}// end of controller0
