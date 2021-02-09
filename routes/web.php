<?php

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



Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/login',[\App\Http\Controllers\AuthController::class,'showFormLogin'])->name('login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login.submit');


Route::middleware('auth')->group(function (){

Route::prefix('me')->group(function (){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('user.index');
});

    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');

});
