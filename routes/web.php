<?php

use App\Http\Controllers\UserController;
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
    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/create',[UserController::class,'store'])->name('user.store');
    Route::get('/{id}/delete',[UserController::class,'delete'])->name('delete.store');
    Route::get('/{id}/edit',[UserController::class,'update'])->name('update.store');
    Route::post('/{id}/edit',[UserController::class,'edit'])->name('edit.store');
});

    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');

});
