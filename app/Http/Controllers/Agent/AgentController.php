<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class AgentController extends Controller
{
    //
    public function information()
    {
        $user_status_check = User::find(Auth::user()->id);
        if($user_status_check->status == '1'){
            $title = "Agent Dashboard";
            return view('agent.index', compact('title'));
        }else {
            Auth::logout();
            Toastr::warning('This account is now deactivated! Please try later :-)','warning');
            return redirect()->route('login');
        }
    }
    
    public function profile()
    {
        $title = "Agent Profile";
        $users = User::find(Auth::user()->id);
        return view('agent.profile.index', compact('users', 'title'));
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
        $slug = "agent";
        if (isset($profile_image)) {
            //make unique name for profile image
            $profile_image_name = $slug.'-'.uniqid().'.'.$profile_image->getClientOriginalExtension();
            $upload_path = 'midea/profile/';
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
        Toastr::success('Agent Profile Updated successfully :-)','Success');
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
            
            Toastr::success('Password updated successfully. Please login again :-) ','Success');
            return redirect('/login');
            
        }else {
            Toastr::success('Something is worng. Please try agian :-)','warning');
            return redirect()->back();
        }
    }
}
