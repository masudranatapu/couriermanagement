<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $title = "Admin Dashboard";
        return view('admin.index', compact('title'));
    }
    
    public function profile()
    {
        $title = "Admin Profile";
        $users = User::find(Auth::user()->id);
        return view('admin.profile.index', compact('users', 'title'));
    }
    public function profileUpdate(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ]);
        $profile_image = $request->file('image');
        $slug = "profile";
        if (isset($profile_image)) {
            //make unique name for profile image
            $profile_image_name = $slug.'-'.uniqid().'.'.$profile_image->getClientOriginalExtension();
            $upload_path = 'media/profile/';
            $profile_image_url = $upload_path.$profile_image_name;

            // unlink profile image 
            $image = User::findOrFail($id);
            if ($image->image) {
                unlink($image->image);
            }

            $profile_image->move($upload_path, $profile_image_name);
        }else {
            $image = User::findOrFail($id);
            $profile_image_url = $image->image;
        }
        
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $profile_image_url,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        Toastr::success('Admin Profile Updated successfully :-)','Success');
        return redirect()->back();
    }

    public function updatePass(Request $request, $id)
    {
        $validateData = $request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed',
        ]);

        $hasPassword = User::findOrFail($id)->password;

        if(Hash::check($request->oldpassword, $hasPassword)) {
            $userData = User::findOrFail($id);
            $userData->password = Hash::make($request->password);
            $userData->save();
            Auth::logout();
            
            Toastr::success('Website updated successfully :-)','Success');
            return redirect('/login');
            
        }else {
            Toastr::success('something is worng. Please try agian :-)','warning');
            return redirect()->back();
        }
    }
    public function userList()
    {
        $title = "All Users";
        $users = User::where('role_id', '!=', 1)->latest()->get();
        // return $users;
        return view('admin.users.index', compact('title', 'users'));
    }
    public function userDestroy($id)
    {
        User::findOrFail($id)->delete();
        Toastr::warning('User successfully delete :-)','warning');
        return redirect()->back();
    }
    public function userActive($id)
    {
        User::findOrFail($id)->update(['status' => '1']);
        Toastr::info('User Successfully Active :-)','Success');
        return redirect()->back();
    }
    public function userInactive($id)
    {
        User::findOrFail($id)->update(['status' => '0']);
        Toastr::info('User Successfully Inactive :-)','Success');
        return redirect()->back();
    }
    public function userAgent()
    {
        $agentusers = User::where('role_id', 2)->latest()->get();
        $title = "Agent";
        return view('admin.users.agent', compact('title', 'agentusers'));
    }
    public function userRider()
    {
        $riderusers = User::where('role_id', 3)->latest()->get();
        $title = "Riders";
        return view('admin.users.rider', compact('title', 'riderusers'));
    }
    public function userAccount()
    {
        $accountusers = User::where('role_id', 4)->latest()->get();
        $title = "Account";
        return view('admin.users.account', compact('title', 'accountusers'));
    }
}
