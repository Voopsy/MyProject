<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
})->name('home');

Route::get('/products/add', [ProductController::class, 'create'])->name('products.add');
Route::post('/products/add', [ProductController::class, 'create'])->name('products.welcome');
Route::get('/auth/login', [LoginController::class, 'show'])->name('auth.login');
Route::post('/auth/login', [LoginController::class, 'submit'])->name('login.submit');
Route::get('/auth/register', [RegisterController::class, 'show'])->name('auth.register');
Route::post('/auth/register', [LoginController::class, 'submit'])->name('register.submit');








