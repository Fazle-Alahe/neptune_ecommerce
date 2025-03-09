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

    
    // imageUpload
    public function upload_image(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $fileName = uniqid() .random_int(50000, 60000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $fileName);
    
            $previewPath = asset('uploads/' . $fileName);
    
            return response()->json([
                'success' => true,
                'filePath' => $fileName,
                'previewPath' => $previewPath,
            ]);
        }
    
    }
}
