<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ProductController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::post('login', [RegisterController::class, 'login'])->name('login');
    Route::get('logout', [RegisterController::class, 'logout'])->name('logout');
});
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::middleware('auth:api')->group( function () {
        Route::post('create', [ProductController::class, 'create']);
        Route::post('update', [ProductController::class, 'update']);
        Route::post('delete', [ProductController::class, 'delete']);
    });
});
Route::prefix('category')->group(function () {
    Route::middleware('auth:api')->group( function () {
        Route::post('create', [CategoryProductController::class, 'create']);
        Route::post('update', [CategoryProductController::class, 'update']);
        Route::post('delete', [CategoryProductController::class, 'delete']);
    });
});
