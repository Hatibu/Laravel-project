<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserAuthController;

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
    return view('welcome');
});
Route::get('login',[UserAuthController::class,'login'])->name('auth.login');
Route::get('register',[UserAuthController::class,'register'])->name('auth.register');
Route::post('save',[UserAuthController::class,'save'])->name('auth.save');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');
Route::get('/auth/logout',[UserAuthController::class,'logout'])->name('auth.logout');



// To prevent access dashboard without logged in

