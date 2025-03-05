<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index(){
        return view('frontend.index');
    }

    public static function dashboard(){
        return view('admin.dashboard');
    }
}
