<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth','admin']], function () {
Route::resource('/categories' , CategoryController::class);

Route::resource('/products' , ProductController::class);
Route::get('/products-archive' , [ProductController::class , 'archive'])->name('products.archive');
Route::get('/products-restore/{id}' , [ProductController::class , 'restore'])->name('products.restore');
Route::delete('/products-forceDelete/{id}' , [ProductController::class , 'forceDelete'])->name('products.forceDelete');

Route::get('/orders' , [OrderController::class , 'index'])->name('orders.index');
Route::get('/orders/{id}' , [OrderController::class , 'show'])->name('orders.show');
Route::delete('/orders/{id}' , [OrderController::class , 'destroy'])->name('orders.destroy');
Route::post('/orders-updateStatus/{id}' , [OrderController::class , 'updateStatus'])->name('orders.updateStatus');

Route::get('/all-users' , function() {
    $users =User::all();
    return view('users.index', compact('users'));
})->name('users.all');

});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
