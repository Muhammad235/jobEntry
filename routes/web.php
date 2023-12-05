<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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

Route::get('/register', [UserController::class,'create']);
Route::post('/register', [UserController::class,'store']);

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::put('/listings/{listing}/edit', [ListingController::class, 'update']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

Route::get('/about', function () {
    return view ('about');
});

Route::post('/users', [UserController::class,'store']);