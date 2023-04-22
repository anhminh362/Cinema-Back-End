<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/create',[ \App\Http\Controllers\ProductController::class,'index']);
Route::get('account', function (){
    return view('account.index');
});

Route::post('account',[\App\Http\Controllers\AccountController::class,'store']);

