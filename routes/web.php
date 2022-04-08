<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\UserController;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/register', function() {
return view('auth/register');
});

Route::get('auth/login', function() {
return view('auth/login');
});

Route::get('deck-collector/search', function() {
return view('deck-collector/search');
});

Route::get('deck-collector/welcome', function() {
return view('deck-collector/welcome');
});

// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//create - tick something off as belonging to user

// Route::post('/users', [UserController::class, 'store'])->name('users.store');
//stores the response from ticking the cards owned

// Route::get('/users/index', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/cards/index', [CardController::class, 'index'])->name('cards.index');

Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');

Route::get('/characters/index}', [CharacterController::class, 'index'])->name('character.index');

Route::get('/characters/{id}', [CharacterController::class, 'show'])->name('character.show');

// Route::get('cards', function () {

//     $cards = Cache::remember('cards', $seconds = 120, function () {
//         return DB::table('cards')->get();
//     });

//     return $cards;

// });