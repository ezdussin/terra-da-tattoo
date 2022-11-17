<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

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

Route::get('/dashboard', function() {
    return view('dashboard');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/providers', [ProviderController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);