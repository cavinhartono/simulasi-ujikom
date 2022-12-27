<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
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

Route::controller(AuthController::class)->group(function () {
  Route::get('/auth', [AuthController::class, 'index']);
  Route::get('/auth/logout', [AuthController::class, 'logout']);
  Route::post('/auth/login', [AuthController::class, 'login']);
  Route::post('/auth/register', [AuthController::class, 'register']);
});

Route::middleware('IsLogin')->group(function () {
  Route::controller(ProductsController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/edit/{id}', 'edit');
    Route::get('/view/{id}', 'view');
    Route::post('/store', 'store')->name('products.store');
    Route::post('/update', 'update')->name('products.update');
    Route::delete('/admin/delete/{$id}', 'delete');
  });
  Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index');
    Route::delete('/cart/{$id}/delete', 'destroy');
  });
});
