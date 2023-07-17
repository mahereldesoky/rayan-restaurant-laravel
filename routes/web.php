<?php

use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

//home controller
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/reservation', [App\Http\Controllers\Admin\ReservationController::class, 'index']);
Route::post('/reservation', [App\Http\Controllers\Admin\ReservationController::class, 'store']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'mailContactForm']);




Route::prefix('admin')->middleware('auth','isAdmin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

//users Controller
Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get('users/create', [App\Http\Controllers\Admin\UserController::class, 'create']);
Route::post('users/create', [App\Http\Controllers\Admin\UserController::class, 'store']);
Route::get('users/edit/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::put('users/update/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
Route::get('users/delete/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);

//offers Controller
Route::get('offers', [App\Http\Controllers\Admin\OffersController::class,'index']);
Route::get('offers/create', [App\Http\Controllers\Admin\OffersController::class,'create']);
Route::post('offers/create', [App\Http\Controllers\Admin\OffersController::class,'store']);
Route::get('offers/edit/{offer_id}', [App\Http\Controllers\Admin\OffersController::class,'edit']);
Route::put('offers/update/{offer_id}', [App\Http\Controllers\Admin\OffersController::class,'update']);
// Route::get('offers/delete/{offer_id}', [App\Http\Controllers\Admin\OffersController::class,'destroy']);
Route::post('offers/delete',[App\Http\Controllers\Admin\OffersController::class, 'destroy']);  // used to delete with bs model

// category Controller

Route::get('category', [App\Http\Controllers\Admin\CategoryController::class,'index']);
Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class,'create']);
Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class,'store']);
Route::get('category/edit/{category_id}', [App\Http\Controllers\Admin\CategoryController::class,'edit']);
Route::put('category/update/{category_id}', [App\Http\Controllers\Admin\CategoryController::class,'update']);
// Route::get('category/delete/{category_id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy']);
Route::post('category/delete',[App\Http\Controllers\Admin\CategoryController::class, 'destroy']);  // used to delete with bs model


// Product Controller

Route::get('products',[App\Http\Controllers\Admin\ProductsController::class,'index']);
Route::get('products/create',[App\Http\Controllers\Admin\ProductsController::class,'create']);
Route::post('products/create', [App\Http\Controllers\Admin\ProductsController::class,'store']);
Route::get('products/edit/{product_id}',[App\Http\Controllers\Admin\ProductsController::class,'edit']);
Route::put('products/update/{product_id}',[App\Http\Controllers\Admin\ProductsController::class,'update']);
Route::post('products/delete',[App\Http\Controllers\Admin\ProductsController::class, 'destroy']);  // used to delete with bs model


Route::get('/reservation', [App\Http\Controllers\Admin\ReservationController::class, 'show']);
Route::get('/reservation/edit/{reservation_id}', [App\Http\Controllers\Admin\ReservationController::class, 'edit']);
Route::put('/reservation/update/{reservation_id}',[App\Http\Controllers\Admin\ReservationController::class,'update']);
Route::post('/reservation/delete',[App\Http\Controllers\Admin\ReservationController::class, 'destroy']);  // used to delete with bs model


});

