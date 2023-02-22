<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Image;

class UserController extends Controller
{
    //

    public function logout () {

        Auth::logout();

        return redirect()->route('login')->with("success", "User Logout Successfully!");

    }

    public function ChangePassword () {

        
        return view("admin.body.change_password");

    }

    public function updatePassword(Request $request) {

       
    }

    public function UserProfile() {

        if (Auth::user()) {
            # code...
            $user = User::findOrFail(Auth::user()->id); // get user id

            if ($user) {
                return view("admin.body.update_profile", compact('user'));
            }
        }
    }

    public function UserProfileUpdate(Request $request) {

        $user = User::findOrFail(Auth::user()->id); // get user id

        $old_image = $request->old_image;
        
        $user_img = $request->file('profile_photo_url');
        
        $name_gen = hexdec(uniqid()).'.'.$user_img->getClientOriginalExtension();
        $upload_location = "storage/profile-photos/";
        
        Image::make($user_img)->resize(100, 100)->save($upload_location.$name_gen);
        
        $image_save_location = $upload_location.$name_gen; // move the image
        

        if ($user) {
            # code...
            $user->name = $request->name; // get user id
            $user->email = $request->email; // get user id
            $user->profile_photo_path = $image_save_location; // get user id
            // unlink($old_image); 

            $user->save(); // get user id

            return redirect()->back()->with("success", "Profile updated successfully");
        }else {

            return redirect()->back()->with("success", "Profile updated Failed");
        }
    }



}
