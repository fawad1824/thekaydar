<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSPController;
use App\Http\Controllers\vendorCn;
use App\Http\Controllers\vendorController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WebsiteSettingController;
use App\Models\Products;
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
     $products=Products::with('productuser')->paginate(6);
    return view('welcome',compact('products'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/single-product/{id}',[WebsiteController::class,'singleproduct']);
Route::get('/single-vendor/{id}',[WebsiteController::class,'singlevendor']);

Route::post('/productbooking',[WebsiteController::class,'bookingproduct']);

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
Route::get('/products-admin', [ProductController::class, 'products'])->name('products');
Route::get('/products-add', [ProductController::class, 'Addproducts'])->name('add.products');
Route::get('/products-edit/{id}', [ProductController::class, 'Editproducts'])->name('editproducts');
Route::get('/products-delete/{id}', [ProductController::class, 'Deleteproducts'])->name('delete.products');
Route::post('/products-store', [ProductController::class, 'StoreProducts'])->name('store.products');

// Vendor
Route::get('/vendor', [vendorCn::class, 'index']);

// customer
Route::get('/customers', [vendorCn::class, 'customer']);

// profile
Route::get('/profile', [vendorCn::class, 'profile']);
Route::post('/profileadd', [vendorCn::class, 'profileupdate']);

// Orders
Route::get('/orders', [OrdersController::class, 'orders']);

// contact
Route::get('/admin-contact', [ContactController::class, 'AdminController']);
Route::get('/vendor-product/{id}', [ContactController::class, 'vendorproduct']);
Route::get('/customer-product/{id}', [ContactController::class, 'customerproduct']);

Route::get('/all-order', [ContactController::class, 'customerorder']);
Route::get('/product-review', [ContactController::class, 'reviewProduct']);
Route::get('/reviewp/{id}', [ContactController::class, 'reviewProductCreate']);



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
