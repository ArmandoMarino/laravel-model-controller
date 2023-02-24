<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');
