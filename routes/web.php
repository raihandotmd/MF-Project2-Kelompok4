<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieOrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersRolesController;
use App\Http\Controllers\MovieGenreController;
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/MovieOrder', [MovieOrderController::class, 'index'])->name('MovieOrder');
// Route::get('/Users', [UsersController::class, 'index'])->name('users');
// Route::get('/UsersRoles', [UsersRolesController::class, 'index'])->name('UsersRoles');
// Route::get('/MovieOrder/create', [MovieOrderController::class, 'create']);
// Route::get('/MovieOrder/store', [MovieOrderController::class, 'store']);


// Route::get('/movieGenre', [MovieGenreController::class, 'index'])->name('MovieOrder');


Route::prefix('movieGenre')->group(function(){
    Route::get('/', [MovieGenreController::class, 'index'])->name('movie_genre');
    Route::get('/create', [MovieGenreController::class, 'create'])->name('movie_genre.create');
    Route::post('/store', [MovieGenreController::class, 'store'])->name('movie_genre.store');
    Route::get('/edit/{id}', [MovieGenreController::class, 'edit'])->name('movie_genre.edit');
    Route::put('/update', [MovieGenreController::class, 'update'])->name('movie_genre.update');
    Route::delete('/delete/{id}', [MovieGenreController::class, 'destroy'])->name('movie_genre.destroy');
});