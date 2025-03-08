<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
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

    public function user_store(Request $request){
        User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'img_path' => $request->img_path,
            'created_at' => Carbon::now(),
        ]);
        return back();
        // return($request->first_name);
        // // die;
    }
}