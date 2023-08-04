<?php

use App\Http\Controllers\MikrotikController;
use App\Http\Livewire\Mikrotik;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');



Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::middleware('auth')->group(function () {
    Route::resource('basic', BasicController::class);
    Route::get('mikrotik/user',  [MikrotikController::class, 'user']);
    Route::get('mikrotik/log',  [MikrotikController::class, 'log']);
    Route::get('mikrotik/dhcp_leases',  [MikrotikController::class, 'dhcp_leases']);
    Route::get('mikrotik/hotspot_profile',  [MikrotikController::class, 'hotspot_profile']);
});
