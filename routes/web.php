<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
  ->name('home');

Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])
  ->name('about');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])
  ->name('blog');

Route::get('/notices', [\App\Http\Controllers\NoticesController::class, 'index'])
  ->name('notices');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])
  ->name('auth.login');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'registerForm'])
  ->name('auth.register');
