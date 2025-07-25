<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController; // Mengimpor AuthController
use App\Http\Controllers\AttractionController; // Mengimpor AttractionController
use App\Http\Controllers\CartController; // Mengimpor CartController
use App\Http\Controllers\HistoryController; // Mengimpor HistoryController
use App\Http\Controllers\ReviewController; // Mengimpor ReviewController
use App\Http\Controllers\TicketTypesController; // Mengimpor TicketTypesController
use App\Http\Controllers\UserController; // Mengimpor UserController
use App\Http\Controllers\ProfileController;

//Authentication
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//before Login

Route::get('/', [AttractionController::class, 'getAllItems']);
Route::get('/Tapaknusa', [AttractionController::class, 'getAllItems'])->name('Tapaknusahome');
Route::get('/TapaknusasearchResult', [AttractionController::class, 'getResult'])->name('TapaknusasearchResult');
Route::get('/TappaknusadetailAtraction', [AttractionController::class, 'getItemsByTitle'])->name('Tapaknusadetailatraction');
Route::get('/Tapaknusaculture', [AttractionController::class, 'getWisataBudaya'])->name('Tapaknusaculture');
Route::get('/Tapaknusafestival', [AttractionController::class, 'getFestivalBudaya'])->name('Tapaknusafestival');  
Route::get('/Tapaknusaatraction', [AttractionController::class, 'getAtraksiBudaya'])->name('Tapaknusaatraction');

Route::get('/Tapaknusapatner', function () {
    return view('beforeLogin.patner');
})->name('Tapaknusapatner');


//after Login
Route::get('/home', [AttractionController::class, 'getAllItems2'])->name('home');
Route::get('/searchResult', [AttractionController::class, 'getResult2'])->name('searchResult');
Route::get('/detailAtraction', [AttractionController::class, 'getItemsByTitle2'])->name('detailatraction');
Route::get('/culture', [AttractionController::class, 'getWisataBudaya2'])->name('culture');
Route::get('/festival', [AttractionController::class, 'getFestivalBudaya2'])->name('festival');  
Route::get('/atraction', [AttractionController::class, 'getAtraksiBudaya2'])->name('atraction');

Route::get('/patner', function () {
    return view('afterLogin.patner');
})->name('patner');

Route::post('/addCart', [CartController::class, 'addToCart'])->name('addCart');
Route::post('/editCart', [CartController::class, 'editCart'])->name('editCart');
Route::post('/deleteCart', [CartController::class, 'deleteCart'])->name('deleteCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');

Route::get('/pay', [HistoryController::class, 'makePayment'])->name('pay');
Route::post('/addToHistory', [HistoryController::class, 'addToHistory'])->name('addToHistory');
Route::get('/profile', [ProfileController::class, 'getProfileData'])->name('profile');
Route::post('/updateUserProfile',[ProfileController::class, 'changeProfileData'])->name('updateUserProfile');