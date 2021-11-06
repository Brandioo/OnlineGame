<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AppereanceController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\FightersController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ItemController;
use App\Http\Controllers\Web\UsersController;
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
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('contact', [AboutController::class, 'contact'])->name('contact');
Route::get('fighters', [FightersController::class, 'fighters'])->name('fighters');
Route::get('fighthistory', [FightersController::class, 'fighthistory'])->name('fighthistory');
Route::get('itemhistory', [ItemController::class, 'itemhistory'])->name('itemhistory');
Route::get('rank', [ItemController::class, 'rank'])->name('rank');
Route::get('appereance', [AppereanceController::class, 'appereance'])->name('appereance');
Route::get('users', [UsersController::class, 'users'])->name('users');
Route::get('settings', [AboutController::class, 'settings'])->name('settings');
