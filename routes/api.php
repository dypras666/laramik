<?php

use App\Http\Controllers\Api\MikrotikController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('profile', [AuthController::class, 'profile']);
    Route::get('logout', [AuthController::class, 'logout']);
});



Route::get('push',  [MikrotikController::class, 'sendpush']);
