<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_login(){
        return view('frontend.auth.login');
    }
    
    public function user_register(){
        return view('frontend.auth.register');
    }

    public function reset_password(){
        return view('frontend.auth.resetpassword');
    }
}
