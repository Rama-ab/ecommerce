<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/products', [ProductController::class , 'index']);
Route::get('/products/{id}', [ProductController::class , 'show']);
Route::get('/products-filter', [ProductController::class , 'filterCategory']);


Route::middleware('auth:sanctum')->get('/orders' , [OrderController::class , 'index']);
Route::middleware('auth:sanctum')->post('/orders' , [OrderController::class , 'store']);

Route::post('register' , [AuthController::class ,'register']);
Route::post('/login' , [AuthController::class ,'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

