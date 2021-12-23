<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WebsiteController;

use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Rider\RiderController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'welcome'])->name('home');

Auth::routes();

    // register section 
Route::get('register/agent-register', [RegisterController::class, 'agentRegister'])->name('agent.register');
Route::post('register/agent-register', [RegisterController::class, 'agentRegisterStore'])->name('agent.register.store');
Route::get('register/rider-register', [RegisterController::class, 'riderRegister'])->name('rider.register');
Route::post('register/rider-register', [RegisterController::class, 'riderRegisterStore'])->name('rider.register.store');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // admin routes
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('profile/{id}', [DashboardController::class, 'profileUpdate'])->name('profile.update');
    Route::post('pass-updated/{id}', [DashboardController::class, 'updatePass'])->name('password.update');

    // website seeting
    Route::resource('website', WebsiteController::class);

});
    // agent routes 
Route::group(['as' => 'agent.', 'prefix' => 'agent', 'namespace' => 'Agent', 'middleware' => ['auth', 'agent']], function () {

    Route::get('/information', [AgentController::class, 'information'])->name('dashboard');
    Route::get('profile', [AgentController::class, 'profile'])->name('profile');
    Route::post('profile/{id}', [AgentController::class, 'profileUpdate'])->name('profile.update');
    Route::post('pass-updated/{id}', [AgentController::class, 'updatePass'])->name('password.update');

});
    // riders routes 
Route::group(['as' => 'rider.', 'prefix' => 'rider', 'namespace' => 'Rider', 'middleware' => ['auth', 'rider']], function () {

    Route::get('/information', [RiderController::class, 'information'])->name('dashboard');
    Route::get('profile', [RiderController::class, 'profile'])->name('profile');
    Route::post('profile/{id}', [RiderController::class, 'profileUpdate'])->name('profile.update');
    Route::post('pass-updated/{id}', [RiderController::class, 'updatePass'])->name('password.update');

});
    // account routes 
Route::group(['as' => 'account.', 'prefix' => 'account', 'namespace' => 'Account', 'middleware' => ['auth', 'account']], function () {

    Route::get('/information', [AccountController::class, 'information'])->name('dashboard');
    Route::get('profile', [AccountController::class, 'profile'])->name('profile');
    Route::post('profile/{id}', [AccountController::class, 'profileUpdate'])->name('profile.update');
    Route::post('pass-updated/{id}', [AccountController::class, 'updatePass'])->name('password.update');

});
    // user routes 
Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {

    Route::get('/information', [UserController::class, 'information'])->name('dashboard');

});