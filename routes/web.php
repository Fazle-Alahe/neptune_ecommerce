<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // user auth
    Route::get('/user/login', [UserController::class, 'user_login'])->name('user.login');
    Route::get('user/list', [UserController::class, 'user_list'])->name('user.list');
    Route::post('user/store', [UserController::class, 'user_store'])->name('user.store');
    Route::post('user/update/{id}', [UserController::class, 'user_update'])->name('user.update');

    Route::get('/user/active/{id}', [UserController::class, 'user_active'])->name('user.active');
    Route::get('/user/destroy/{id}', [UserController::class, 'user_destroy'])->name('user.destroy');
    Route::post('/user/select/destroy', [UserController::class, 'user_select_destroy'])->name('user.select.destroy');
    Route::get('/trash/user', [UserController::class, 'trash_user'])->name('trash.user');
    Route::get('/user/restore/{id}', [UserController::class, 'user_restore'])->name('user.restore');
    Route::get('/user/delete/{id}', [UserController::class, 'user_delete'])->name('user.delete');
    Route::post('/user/select/delete', [UserController::class, 'user_select_delete'])->name('user.select.delete');

    Route::get('/user/logout', [HomeController::class, 'user_logout'])->name('user.logout');

    // category
    Route::get('/add/category', [CategoryController::class, 'add_category'])->name('add.category');
    Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
    Route::get('/category/list', [CategoryController::class, 'category_list'])->name('category.list');
    Route::get('/category/active/{id}', [CategoryController::class, 'category_active'])->name('category.active');
    Route::get('/category/edit/{id}', [CategoryController::class, 'category_edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'category_update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'category_destroy'])->name('category.destroy');
    Route::get('/trash/category', [CategoryController::class, 'trash_category'])->name('trash.category');
    Route::get('/category/restore/{id}', [CategoryController::class, 'category_restore'])->name('category.restore');
    Route::get('/category/delete/{id}', [CategoryController::class, 'category_delete'])->name('category.delete');

    // Route::get('/search', [CategoryController::class, 'search'])->name('search');

});
Route::get('/user/login', [HomeController::class, 'user_login'])->name('user.login');
Route::post('/user/login/post', [HomeController::class, 'user_login_post'])->name('user.login.post');


// customer auth
Route::get('/customer/login', [CustomerController::class, 'customer_login'])->name('customer.login');
Route::get('/customer/register', [CustomerController::class, 'customer_register'])->name('customer.register');
Route::get('/customer/reset/password', [CustomerController::class, 'customer_reset_password'])->name('customer.reset.password');


// imageUpload
Route::post('/upload-image', [HomeController::class, 'upload_image']);

// frontend product
Route::get('product/details', [ProductController::class, 'product_details'])->name('product.details');

//checkout
Route::get('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
// Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__ . '/auth.php';
