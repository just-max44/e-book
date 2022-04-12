<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

//Product routes
Route::get('/boutique/{category:slug?}', [ProductController::class, 'index'])->name('products.index');
Route::get('/boutique/{product:slug}/voir', [ProductController::class, 'show'])->name('products.show');
Route::get('search', [ProductController::class, 'search'])->name('products.search');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/panier', [CartController::class, 'index'])->name('cart.index');
    Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');
    Route::patch('/panier/{rowId}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/coupon', [CartController::class, 'storeCoupon'])->name('cart.store.coupon');
    Route::delete('/coupon', [CartController::class, 'destroyCoupon'])->name('cart.destroy.coupon');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/paiement', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/paiement', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/merci', [CheckoutController::class, 'thankYou'])->name('checkout.thankYou');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('contact-form', [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
