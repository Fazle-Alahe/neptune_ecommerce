<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_login(){
        return view('admin.auth.login');
    }
    

    public function user_list(){
        return view('admin.users.list');
    }
    // public function user_register(){
    //     return view('admin.auth.register');
    // }

    // public function reset_password(){
    //     return view('frontend.auth.resetpassword');
    // }
}