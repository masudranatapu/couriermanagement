<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function agentRegister()
    {
        $title = "Agent Register";
        return view('auth.register.agent_register', compact('title'));
    }
    public function riderRegister()
    {
        $title = "Rider Register";
        return view('auth.register.rider_register', compact('title'));
    }
    public function agentRegisterStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);
        User::insert([
            'role_id' => '2',
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'status' => '0',
        ]);
        Toastr::success('Agent Register Successfully done. Our team will be contact with you :-)','Success');
        return redirect()->back();
    }
    public function riderRegisterStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);
        User::insert([
            'role_id' => '3',
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'status' => '0',
        ]);
        Toastr::success('Rider register successfully done. Our team will be contact with you :-)','Success');
        return redirect()->back();
    }
}
