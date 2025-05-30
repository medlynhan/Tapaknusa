<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController; // Mengimpor AuthController
use App\Http\Controllers\AttractionController; // Mengimpor AttractionController
use App\Http\Controllers\CartController; // Mengimpor CartController
use App\Http\Controllers\HistoryController; // Mengimpor HistoryController
use App\Http\Controllers\ReviewController; // Mengimpor ReviewController
use App\Http\Controllers\TicketTypesController; // Mengimpor TicketTypesController
use App\Http\Controllers\UserController; // Mengimpor UserController


Route::get('/', function () {
    return view('homeBeforeLogin');
});

Route::get('/homeBeforeLogin', function () {
    return view('homeBeforeLogin');
})->name('Tapaknusahome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/culture', function () {
    return view('culture');
})->name('culture');

Route::get('/atraction', function () {
    return view('atraction');
})->name('atraction');

Route::get('/festival', function () {
    return view('festival');
})->name('festival');

Route::get('/patner', function () {
    return view('patner');
})->name('patner');

Route::get('/searchResult', function () {
    return view('searchResult');
})->name('searchResult');

Route::get('/detailAtraction', function () {
    return view('detailAtraction');
})->name('detailAtraction');

Route::get('/pay', function () {
    return view('pay');
})->name('pay');


//Authentication
// Halaman Register (Sign-up)
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');