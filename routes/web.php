<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| SKLEP (PUBLICZNY)
|--------------------------------------------------------------------------
*/
Route::get('/', [ProductController::class, 'index'])->name('shop.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('shop.show');

/*
|--------------------------------------------------------------------------
| CHECKOUT (ZALOGOWANY USER)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});

/*
|--------------------------------------------------------------------------
| PROFIL
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| PANEL ADMINISTRATORA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('dashboard.admin');
        })->name('dashboard');

        Route::resource('users', UserController::class)->except(['show']);
        Route::resource('products', AdminProductController::class)->except(['show']);

        Route::resource('orders', AdminOrderController::class)
            ->only(['index', 'show', 'destroy']);
    });

/*
|--------------------------------------------------------------------------
| KOSZYK
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/increase/{product}', [CartController::class, 'increase'])->name('cart.increase');
    Route::post('/cart/decrease/{product}', [CartController::class, 'decrease'])->name('cart.decrease');
    Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
});

/*
|--------------------------------------------------------------------------
| ZAMÓWIENIA UŻYTKOWNIKA
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/my-orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('/my-orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});

require __DIR__ . '/auth.php';
