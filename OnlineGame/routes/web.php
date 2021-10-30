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

Route::get('/', function () {
    return view('welcome');
});
Route::get("login",[\App\Http\Controllers\Web\AuthController::class, 'login'])->name('login') ;
Route::get('register', [\App\Http\Controllers\Web\AuthController::class, 'register'])->name('register');

//Route::get("app",[\App\Http\Controllers\Web\AuthController::class, 'app'])->name('app') ;
//Route::get('auth', [\App\Http\Controllers\Web\AuthController::class, 'auth'])->name('auth');


Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

