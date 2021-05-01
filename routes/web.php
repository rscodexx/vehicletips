<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\HomeController;

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


// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// Auth
Route::get('/login', [LoginController::class, 'login'])->name('user.auth.login');
Route::post('/loginDo', [LoginController::class, 'loginDo'])->name('user.auth.loginDo');
Route::get('/register', [RegisterController::class, 'register'])->name('user.auth.register');
Route::post('/registerDo', [RegisterController::class, 'registerDo'])->name('user.auth.registerDo');

