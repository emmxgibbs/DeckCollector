<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/sign-up', function() {
    return view('deck-collector/sign-up');
});

Route::get('/submit', function() {
    return view('deck-collector/submit');
});

Route::get('/login', function() {
    return view('deck-collector/login');
});

Route::get('/search', function() {
    return view('deck-collector/search');
});

Route::get('/home', function() {
    return view('deck-collector/home');
});


// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//create - tick something off as belonging to user

// Route::post('/users', [UserController::class, 'store'])->name('users.store');
//stores the response from ticking the cards owned

Route::get('/users/index', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/cards/index', [CardController::class, 'index'])->name('cards.index');

Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');