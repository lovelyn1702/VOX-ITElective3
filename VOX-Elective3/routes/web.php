<?php

use App\Http\Controllers\ForgotPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\ForgetPassword;

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

// get index function from Register Controller
Route::get('/register', [Register::class, 'index'])->name('register');

Route::get('/login', [Login::class, 'index'])->name('login');

Route::get('/forgetpassword', [ForgetPassword::class, 'index'])->name('forgetpassword');