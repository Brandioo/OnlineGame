<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('pages.home');

Route::get('login', [\App\Http\Controllers\Web\AuthController::class, 'login'])->name('login') ;
Route::get('register', [\App\Http\Controllers\Web\AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('about', [\App\Http\Controllers\Web\AboutController::class, 'about'])->name('about');
Route::get('contact', [\App\Http\Controllers\Web\AboutController::class, 'contact'])->name('contact');
