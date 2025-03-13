<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function index(){
        return view('frontend.index');
    }

    public static function dashboard(){
        return view('admin.dashboard');
    }

    
    // imageUpload
    public function upload_image(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $fileName = 'uploads/'.uniqid() .random_int(50000, 60000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $fileName);
    
            $previewPath = asset($fileName);
    
            return response()->json([
                'success' => true,
                'filePath' => $fileName,
                'previewPath' => $previewPath,
            ]);
        }
    }

    public function user_login(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('admin.auth.login');
    }

    public function user_login_post(Request $request){
        $request->validate([
            'email' => 'required',
            // 'email' => 'required|exists:users',
            'password' => 'required',
        ]);

        if(User::where('email', $request->email)->exists()){
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                return redirect()->route('dashboard')->with('success', "You're logged in!!");
            }
            else{
                return back()->with('wrong', 'Wrong credential.');
            }
        }
        else{
        
            return back()->with('wrong', 'Email does not exists.');
        }
    }


    public function user_logout(){
        Auth::logout();
        return redirect()->route('user.login');

    }
}
