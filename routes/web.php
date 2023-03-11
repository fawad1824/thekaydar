<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSPController;
use App\Http\Controllers\vendorController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WebsiteSettingController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Categories
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add.category');

Route::post('/store-category', [CategoryController::class, 'storeCategory']);
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);



// Categories
Route::get('/specification', [ProductSPController::class, 'index'])->name('specification');
Route::get('/edit-specification/{id}', [ProductSPController::class, 'editProductSP'])->name('edit.specification');
Route::get('/add-specification', [ProductSPController::class, 'addProductSP'])->name('add.specification');

Route::post('/store-specification', [ProductSPController::class, 'storeProductSP']);
Route::get('/delete-specification/{id}', [ProductSPController::class, 'deleteProductSP']);

// Products
Route::get('/products', [ProductController::class, 'products']);

// Vendor
Route::get('/vendor', [vendorController::class, 'vendor']);

// customer
Route::get('/customers', [CustomersController::class, 'customers']);

// Orders
Route::get('/orders', [OrdersController::class, 'orders']);

// contact
Route::get('/admin-contact', [ContactController::class, 'AdminController']);



// Website
Route::get('/products', [WebsiteController::class, 'product']);
Route::get('/products-single/{id}', [WebsiteController::class, 'productSingle']);
Route::get('/vendors', [WebsiteController::class, 'vendors']);
Route::get('/vendors/{id}', [WebsiteController::class, 'vendorsProduct']);
Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/services', [WebsiteController::class, 'services']);
Route::get('/booking', [WebsiteController::class, 'booking']);

// website setting
Route::get('/setting', [WebsiteSettingController::class, 'index']);
