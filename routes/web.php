<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tips\TipController;

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
Route::get('/logout', [LoginController::class, 'logout'])->name('user.auth.logout');
Route::get('/register', [RegisterController::class, 'register'])->name('user.auth.register');
Route::post('/registerDo', [RegisterController::class, 'registerDo'])->name('user.auth.registerDo');

// Tips
Route::group(['middleware' => ['auth']], function() {
    Route::match(['post', 'get'],'/tips', [TipController::class, 'tips'])->name('user.tips');
    Route::post('/tips/search', [TipController::class, 'tipsSearch'])->name('user.tips.search');
    Route::get('/tips/my', [TipController::class, 'myTips'])->name('user.tips.my');
    Route::get('/tips/create', [TipController::class, 'tipsCreate'])->name('user.tips.create');
    Route::post('/tips/createDo', [TipController::class, 'tipsCreateDo'])->name('user.tips.tipsCreateDo');
    Route::post('/tips/del', [TipController::class, 'tipsDel'])->name('user.tips.tipsDel');
});
