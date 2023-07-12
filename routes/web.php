<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieOrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersRolesController;
use App\Http\Controllers\MovieGenreController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MovieScheduleController;
use App\Http\Controllers\SeatsController;
use App\Http\Controllers\CinemasController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MoviesFrontendController;
use App\Http\Controllers\MovieOrderFrontendController;


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


Route::get('/', [FrontendController::class, 'index'])->name('frontend');

Auth::routes();

// admin route
Route::group(['middleware' => ['auth','role:admin']], function(){
    Route::prefix('/admin/page')->group(function () {
        Route::get('/', function () {
            return 'admin page test';
        })->name('admin');
        Route::prefix('/movies')->group(function(){
            Route::get('/', [MoviesController::class, 'index'])->name('movies');
            Route::get('/create', [MoviesController::class, 'create'])->name('movies.create');
            Route::post('/store', [MoviesController::class, 'store'])->name('movies.store');
            Route::get('/show/{id}', [MoviesController::class, 'show'])->name('movies.show');
            Route::get('/edit/{id}', [MoviesController::class, 'edit'])->name('movies.edit');
            Route::put('/update', [MoviesController::class, 'update'])->name('movies.update');
            Route::delete('/delete/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');
        
            Route::prefix('/schedule')->group(function(){
                Route::get('/', [MovieScheduleController::class, 'index'])->name('movie_schedule');
                Route::get('/create', [MovieScheduleController::class, 'create'])->name('movie_schedule.create');
                Route::post('/store', [MovieScheduleController::class, 'store'])->name('movie_schedule.store');
                Route::get('/edit/{id}', [MovieScheduleController::class, 'edit'])->name('movie_schedule.edit');
                Route::put('/update', [MovieScheduleController::class, 'update'])->name('movie_schedule.update');
                Route::delete('/delete/{id}', [MovieScheduleController::class, 'destroy'])->name('movie_schedule.destroy');
            });
        
            Route::prefix('/genre')->group(function(){
                Route::get('/', [MovieGenreController::class, 'index'])->name('movie_genre');
                Route::get('/create', [MovieGenreController::class, 'create'])->name('movie_genre.create');
                Route::post('/store', [MovieGenreController::class, 'store'])->name('movie_genre.store');
                Route::get('/edit/{id}', [MovieGenreController::class, 'edit'])->name('movie_genre.edit');
                Route::put('/update', [MovieGenreController::class, 'update'])->name('movie_genre.update');
                Route::delete('/delete/{id}', [MovieGenreController::class, 'destroy'])->name('movie_genre.destroy');
            });
        
            Route::prefix('/order')->group(function(){
                Route::get('/', [MovieOrderController::class, 'index'])->name('movie_order');
                Route::get('/create', [MovieOrderController::class, 'create'])->name('movie_order.create');
                Route::post('/store', [MovieOrderController::class, 'store'])->name('movie_order.store');
                Route::get('/edit/{id}', [MovieOrderController::class, 'edit'])->name('movie_order.edit');
                Route::put('/update', [MovieOrderController::class, 'update'])->name('movie_order.update');
                Route::delete('/delete/{id}', [MovieOrderController::class, 'destroy'])->name('movie_order.destroy');
            });
        });
        
        Route::prefix('/cinemas')->group(function(){
            Route::get('/', [CinemasController::class, 'index'])->name('cinemas');
            Route::get('/create', [CinemasController::class, 'create'])->name('cinemas.create');
            Route::post('/store', [CinemasController::class, 'store'])->name('cinemas.store');
            Route::get('/edit/{id}', [CinemasController::class, 'edit'])->name('cinemas.edit');
            Route::put('/update', [CinemasController::class, 'update'])->name('cinemas.update');
            Route::delete('/delete/{id}', [CinemasController::class, 'destroy'])->name('cinemas.destroy');
        });
        
        Route::prefix('/seats')->group(function(){
            Route::get('/', [SeatsController::class, 'index'])->name('seats');
            Route::get('/create', [SeatsController::class, 'create'])->name('seats.create');
            Route::post('/store', [SeatsController::class, 'store'])->name('seats.store');
            Route::get('/edit/{id}', [SeatsController::class, 'edit'])->name('seats.edit');
            Route::put('/update', [SeatsController::class, 'update'])->name('seats.update');
            Route::delete('/delete/{id}', [SeatsController::class, 'destroy'])->name('seats.destroy');
        });
        
        Route::prefix('/users')->group(function(){
            Route::get('/', [UsersController::class, 'index'])->name('users');
        
            Route::prefix('/roles')->group(function(){
                Route::get('/', [UsersRolesController::class, 'index'])->name('users_roles');
                Route::get('/create', [UsersRolesController::class, 'create'])->name('users_roles.create');
                Route::post('/store', [UsersRolesController::class, 'store'])->name('users_roles.store');
                Route::get('/edit/{id}', [UsersRolesController::class, 'edit'])->name('users_roles.edit');
                Route::put('/update', [UsersRolesController::class, 'update'])->name('users_roles.update');
                Route::delete('/delete/{id}', [UsersRolesController::class, 'destroy'])->name('users_roles.destroy');
            });
        });
        
    }); 
});

// user route
Route::middleware(['auth'])->group(function () {
    Route::get('/user', function () {
        return 'user page test';
    })->name('user');
});


Route::get('/deny', function () {
    return 'You are not allowed to access this page.';
})->name('deny');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/frontend/movie/{id}', [MoviesFrontendController::class, 'show'])->name('movie.show');

Route::group(['middleware' => ['auth','role:customer-admin']], function(){
    Route::get('/frontend/movie/{id}/cinema/{cinema_id}', [MovieOrderFrontendController::class, 'show'])->name('movie.cinema');
    Route::get('/frontend/movie/order/success', [MovieOrderFrontendController::class, 'success'])->name('movie.order.success');
    Route::post('/frontend/movie/order/store', [MovieOrderFrontendController::class, 'store'])->name('movie.order.store');
    Route::get('/frontend/user/ticket', [FrontendController::class, 'ticketUser'])->name('movie.order');
});