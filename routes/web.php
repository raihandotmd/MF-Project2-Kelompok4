<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieOrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersRolesController;
use App\Http\Controllers\MovieGenreController;
//use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MoviesScheduleController;
use App\Http\Controllers\SeatsController;
use App\Http\Controllers\CinemasController;

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

Route::get('/movies', [MoviesController::class,'index'])->name('movies');
Route::get('/movies/create', [MoviesController::class,'create'])->name('movies.create');
Route::post('/movies/store', [MoviesController::class,'store'])->name('movies.store');
Route::get('/movies/show/{id}', [MoviesController::class,'show'])->name('movies.show');
Route::get('/movies/edit/{id}', [MoviesController::class,'edit'])->name('movies.edit');
Route::put('/movies/update', [MoviesController::class,'update'])->name('movies.update');
Route::delete('/movies/delete/{id}', [MoviesController::class,'destroy'])->name('movies.destroy');


Route::get('/movies/schedule', [MoviesScheduleController::class, 'index'])->name('movie_schedule');


Route::get('/cinemas', [CinemasController::class, 'index'])->name('cinemas');
Route::get('/cinemas/create', [CinemasController::class, 'create'])->name('cinemas.create');
Route::post('/cinemas/store', [CinemasController::class, 'store'])->name('cinemas.store');
Route::get('/cinemas/edit/{id}', [CinemasController::class, 'edit'])->name('cinemas.edit');
Route::put('/cinemas/update', [CinemasController::class, 'update'])->name('cinemas.update');
Route::delete('/cinemas/delete/{id}', [CinemasController::class, 'destroy'])->name('cinemas.destroy');

Route::get('/seats', [SeatsController::class, 'index'])->name('seats');
Route::get('/seats/create', [SeatsController::class, 'create'])->name('seats.create');
Route::post('/seats/store', [SeatsController::class, 'store'])->name('seats.store');
Route::get('/seats/edit/{id}', [SeatsController::class, 'edit'])->name('seats.edit');
Route::put('/seats/update', [SeatsController::class, 'update'])->name('seats.update');
Route::delete('/seats/delete/{id}', [SeatsController::class, 'destroy'])->name('seats.destroy');