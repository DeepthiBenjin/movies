<?php

use App\Http\Controllers\MovieController;
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


Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', [\App\Http\Controllers\AuthController::class, 'index']);

Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
Route::post('post-login', [\App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [\App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [\App\Http\Controllers\Auth\AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [\App\Http\Controllers\Auth\AuthController::class, 'home']); 
Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::get('movies', [\App\Http\Controllers\Auth\AuthController::class, 'movies'])->name('movies');

Route::get('/', [MovieController::class, 'showmovies']); 

Route::get('dashboard', [MovieController::class, 'showmovies']); 
Route::get('/searchshows', [MovieController::class, 'searchshows']);
Route::get('/showseats', [MovieController::class, 'showseats']);  

Route::post('book', [MovieController::class, 'booking'])->name('book.post'); 


