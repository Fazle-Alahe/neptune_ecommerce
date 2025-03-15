<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function user_login()
    {
        return view('admin.auth.login');
    }


    public function user_list()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.users.list', [
            'users' => $users,
        ]);
    }
    // public function user_register(){
    //     return view('admin.auth.register');
    // }

    // public function reset_password(){
    //     return view('frontend.auth.resetpassword');
    // }

    public function user_store(Request $request)
    {
        // Validate form input
        // $validator = Validator::make($request->all(), [
        $request->validate([

            'first_name' => 'required|string|max:60',
            'last_name' => 'nullable|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'img_path' => 'nullable|string|max:255',
        ]);
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();  // RedirectResponse
        // }

        if ($request->password != $request->confirm_password) {
            return back()->with('wrong', "Password doesn't match!");
        }

        User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'img_path' => $request->img_path,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'User created successfully');
    }

    public function user_active($id)
    {
        $user = User::find($id);
        if ($user->is_active == 0) {
            $user->update([
                'is_active' => 1,
            ]);
            return back()->with('success', 'User has been activated!');
        } else {
            $user->update([
                'is_active' => 0,
            ]);
            return back()->with('warning', 'User has been deactivated!');
        }
    }

    public function user_destroy($id)
    {
        $user = User::find($id);
        $user->update([
            'is_active' => 0,
        ]);
        $user->delete();
        return back()->with('wrong', 'User moved to trash');
    }

    public function user_select_destroy(Request $request)
    {
        if ($request->user_id == '') {
            return back();
        } else {
            foreach ($request->user_id as $user) {
                $user_id = User::find($user);
                $user_id->update([
                    'is_active' => 0,
                ]);
                $user_id->delete();
            }
            return back()->with('wrong', 'Users moved to trash');
        }
    }

    function trash_user()
    {
        $trash_user = User::onlyTrashed()->paginate(10);
        return view('admin.users.trash', [
            'trash_user' => $trash_user,
        ]);
    }

    public function user_restore($id)
    {
        User::onlyTrashed()->find($id)->restore();
        return back()->with('success', 'User has been restored');
    }

    public function user_delete($id)
    {
        $user = User::onlyTrashed()->find($id);
        if ($user->img_path != '') {
            $trim = trim($user->img_path, 'uploads');
            $image_delete = public_path('uploads' . $trim);
            unlink($image_delete);
        }
        $user->forceDelete();
        return back()->with('wrong', 'User deleted permanently');
    }

    public function user_select_delete(Request $request)
    {
        if ($request->user_id == '') {
            return back();
        } else {
            foreach ($request->user_id as $user) {
                $users = User::onlyTrashed()->find($user);
                if ($users->img_path != '') {
                    $trim = trim($users->img_path, 'uploads');
                    $image_delete = public_path('uploads' . $trim);
                    unlink($image_delete);
                }
                $users->forceDelete();
            }
            return back()->with('wrong', 'Users deleted permanently');
        }
    }
}
