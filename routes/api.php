<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/insertProduct', [ProductController::class, 'create']);
Route::post('/deleteProduct/{id}', [ProductController::class, 'delete']);

Route::post('/insertProvider', [ProviderController::class, 'create']);
Route::post('/deleteProvider/{id}', [ProviderController::class, 'delete']);

Route::post('/insertUser', [UserController::class, 'create']);
Route::post('/deleteUser/{id}', [UserController::class, 'delete']);

Route::post('/insertClient', [ClientController::class, 'create']);
Route::post('/deleteClient/{id}', [ClientController::class, 'delete']);