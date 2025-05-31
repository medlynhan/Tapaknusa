<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController; // Mengimpor AuthController
use App\Http\Controllers\AttractionController; // Mengimpor AttractionController
use App\Http\Controllers\CartController; // Mengimpor CartController
use App\Http\Controllers\HistoryController; // Mengimpor HistoryController
use App\Http\Controllers\ReviewController; // Mengimpor ReviewController
use App\Http\Controllers\TicketTypesController; // Mengimpor TicketTypesController
use App\Http\Controllers\UserController; // Mengimpor UserController

//before Login
Route::get('/', function () {
    return view('beforeLogin.home');
});

Route::get('/Tapaknusahome', function () {
    return view('beforeLogin.home');
})->name('Tapaknusahome');


Route::get('/Tapaknusaculture', function () {
    return view('beforeLogin.culture');
})->name('Tapaknusaculture');

Route::get('/Tapaknusaatraction', function () {
    return view('beforeLogin.atraction');
})->name('Tapaknusaatraction');

Route::get('/Tapaknusafestival', function () {
    return view('beforeLogin.festival');
})->name('Tapaknusafestival');

Route::get('/Tapaknusapatner', function () {
    return view('beforeLogin.patner');
})->name('Tapaknusapatner');

Route::get('/TapaknusasearchResult', function () {
    return view('beforeLogin.searchResult');
})->name('TapaknusasearchResult');

Route::get('/TappaknusadetailAtraction', function () {
    return view('beforeLogin.detailAtraction');
})->name('TapaknusadetailAtraction');


//after Login
Route::get('/home', function () {
    return view('afterLogin.home');
})->name('home');

Route::get('/cart', function () {
    return view('afterLogin.cart');
})->name('cart');

Route::get('/culture', function () {
    return view('afterLogin.culture');
})->name('culture');

Route::get('/atraction', function () {
    return view('afterLogin.atraction');
})->name('atraction');

Route::get('/festival', function () {
    return view('afterLogin.festival');
})->name('festival');

Route::get('/patner', function () {
    return view('afterLogin.patner');
})->name('patner');

Route::get('/searchResult', function () {
    return view('afterLogin.searchResult');
})->name('searchResult');

Route::get('/detailAtraction', function () {
    return view('afterLogin.detailAtraction');
})->name('detailAtraction');

Route::get('/pay', function () {
    return view('afterLogin.pay');
})->name('pay');


//Authentication
// Halaman Register (Sign-up)
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');