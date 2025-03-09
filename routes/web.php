<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// user auth
Route::get('/user/login', [UserController::class, 'user_login'])->name('user.login');
Route::get('user/list', [UserController::class, 'user_list'])->name('user.list');
Route::post('user/store', [UserController::class, 'user_store'])->name('user.store');

// customer auth
Route::get('/customer/login', [CustomerController::class, 'customer_login'])->name('customer.login');
Route::get('/customer/register', [CustomerController::class, 'customer_register'])->name('customer.register');
Route::get('/customer/reset/password', [CustomerController::class, 'customer_reset_password'])->name('customer.reset.password');


// imageUpload
Route::post('/upload-image', [HomeController::class, 'upload_image']);

// frontend product
Route::get('product/details', [ProductController::class, 'product_details'])->name('product.details');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
