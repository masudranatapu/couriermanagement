<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    
    protected $redirectTo;

    protected function redirectTo() {
        if(auth()->user()->role_id == 1) {
            Toastr::success('Welcome to admin dashboard :-)','Success');
            return route('admin.dashboard');
        }elseif(auth()->user()->role_id == 2) {
            Toastr::success('Welcome to agent dashboard :-)','Success');
            return route('agent.dashboard');
        }elseif(auth()->user()->role_id == 3) {
            Toastr::success('Welcome to rider dahsboard :-)','Success');
            return route('rider.dashboard');
        }elseif(auth()->user()->role_id == 4) {
            Toastr::success('Welcome to account dashboard :-)','Success');
            return route('account.dashboard');
        }elseif(auth()->user()->role_id == 5) {
            Toastr::success('Welcome to user profile :-)','Success');
            return route('user.dashboard');
        }else {
            $this->redirectTo = route('login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
