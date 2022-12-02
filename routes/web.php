<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [ProductsController::class, 'index']);
Route::post('/store', [ProductsController::class, 'store'])->name('products.store');

Route::get('/auth', [AuthController::class, 'index']);
Route::get('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::delete('/admin/delete/{$id}', [ProductsController::class, 'delete']);
