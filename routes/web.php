<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserAuthController;
use App\Http\controllers\PagesController;
use App\Http\controllers\UserProfileController;
use App\Http\controllers\SmsController;



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
// from userAuth controller

Route::post('save',[UserAuthController::class,'save'])->name('auth.save');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');
Route::put('/update/{id}',[UserAuthController::class,'update']);
Route::delete('/memberdelete/{id}',[UserAuthController::class,'delete']);
Route::get('/export-excel',[UserAuthController::class,'exportIntoExcel']);
Route::get('/export-csv',[UserAuthController::class,'exportIntoCSV']);
Route::get('logout',[UserAuthController::class,'logout'])->name('auth.logout');
Route::get('/auth/login',[UserAuthController::class,'login'])->name('auth.login');
Route::get('/auth/register',[UserAuthController::class,'register'])->name('auth.register');
Route::get('/admin/dashboard',[UserAuthController::class,'dashboard'])->middleware('isLogged');

// From pages controller
Route::get('student',[PagesController::class,'student'])->name('pages.student');
Route::post('addMarks',[PagesController::class,'addMarks'])->name('pages.addMarks');
// From userProfile controller
Route::get('/admin/user_profile',[UserProfileController::class,'index']);




// From sms controller
Route::get('/send-sms',[SmsController::class,'sendMessage']);











