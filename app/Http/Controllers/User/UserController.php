<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    //
    public function information()
    {
        $title = "User Acount";
        return view('user.index', compact('title'));
    }
}
