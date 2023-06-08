<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\LibraryViewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
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
    return view('pages.home');
});
Route::get('/discover', function () {
    return view('pages.discover'); 
});
Route::resource('/', HomeViewController::class)->only(['index','show']);
Route::resource('/store', HomeViewController::class)->only(['index','show']);
Route::resource('/discover',ViewController::class)->only(['index','show']);

Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class,'index'])->name('adminLogin');
    Route::post('/login/owner',[AdminController::class,'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get("/products",[AdminController::class,'products'])->name('admin.products')->middleware('admin');
    Route::get("/users",[AdminController::class,'users'])->name('admin.user')->middleware('admin');
    Route::get('/logout',[AdminController::class,'adminLogout'])->name('admin.logout')->middleware('admin');
    Route::resource('/games',GameController::class)->middleware('admin');
    Route::resource('/users',UserController::class)->middleware('admin');
    });

// Route::get("/admin/dashboard", function() {
//     return view('pages.admindashboard');
// });
// Route::get("/admin/products",[GameController::class,'index'], function() {
    
//     return view('pages.adminproducts');
// });
// Route::get("/admin/users",[UserController::class,'index'], function() {
//     return view('pages.adminuser');
// });
Route::get('/about', function () {
    return view('pages.about');
});
// Route::get('products', [ProductController::class, 'productList'])->name('products.list');
// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list')->middleware(['auth', 'verified']);
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/dashboard',[LibraryViewController::class,'index'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('products', [ProductController::class, 'productList'])->name('products.list');
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    Route::get('wishlist', [WishlistController::class, 'wishlistList'])->name('wishlist.list');
    Route::post('wishlist', [WishlistController::class, 'addToWishlist'])->name('wishlist.store');
    Route::post('update-wishlist', [WishlistController::class, 'updateWishlist'])->name('wishlist.update');
    Route::post('wishlistRemove', [WishlistController::class, 'removeWishlist'])->name('wishlist.remove');
    Route::post('wishlistClear', [WishlistController::class, 'clearAllWishlist'])->name('wishlist.clear');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('complete-order', [OrderController::class, 'createOrder'])->name('order.complete');

});


require __DIR__.'/auth.php';


