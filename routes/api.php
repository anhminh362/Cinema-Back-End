<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware(['auth:sanctum'])->group(function() {

    Route::controller(AccountController::class)->group(function () {
        Route::get('account/','index');
        Route::post('account/{id}','show');
    });

    Route::controller(\App\Http\Controllers\UserController::class)->group( function (){
        Route::get('user/','index');
        Route::post('create_user/','store');
    });


});

Route::controller(\App\Http\Controllers\MovieController::class)->group( function () {
   Route::get('movie/','index');
   Route::get('movie/','show');
   Route::post('create_movie','store');
});
//
//Route::controller(\App\Http\Controllers\AccountController::class)->group(function () {
//   Route::get('account','index');
//   Route::post('account','store');
//});

Route::post('register',[AuthController::class,'register']);
Route::post('verify',[VerificationController::class,'verifyOtp']);
Route::post('login',[LoginController::class,'login']);
