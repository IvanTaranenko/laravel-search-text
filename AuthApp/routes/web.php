<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/private', [App\Http\Controllers\HomeController::class, 'private'])->name('private');




Route::get('/email',[\App\Http\Controllers\EmailController::class,'email']);
Route::get('/send-enrollment',[\App\Http\Controllers\TestEnrollmentController::class,'sendTestNotification']);

Route::get('/send',[\App\Http\Controllers\SmsController::class,'index']);
