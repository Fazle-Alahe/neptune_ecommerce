<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_login(){
        return view('frontend.auth.login');
    }
    
    public function customer_register(){
        return view('frontend.auth.register');
    }

    public function customer_reset_password(){
        return view('frontend.auth.resetpassword');
    }
}