<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use Illuminate\Auth\Middleware\Authenticate;

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

// admin route
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin', function () {
        return 'admin page test';
    })->name('admin');
});

// user route
Route::middleware(['auth'])->group(function () {
    Route::get('/user', function () {
        return 'user page test';
    })->name('user');
});

Auth::routes();

Route::get('/deny', function () {
    return 'You are not allowed to access this page.';
})->name('deny');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
