<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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


Route::get('/', [ListingController::class, 'index']);

Route::get('/about', function () {
    return view ('about');
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [UserController::class, 'login']);
    Route::get('/register', [UserController::class, 'create']);    
});

Route::post('/register', [UserController::class,'store']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class, 'authenticate'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/listings/create', [ListingController::class, 'create']);

    Route::post('/listings', [ListingController::class, 'store']);

    Route::get('/listings/{listing}', [ListingController::class, 'show']);

    Route::put('/listings/{listing}/edit', [ListingController::class, 'update']);

    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

    Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

    Route::get('/dashboard', [UserController::class, 'manage']);
});





