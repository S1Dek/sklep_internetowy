<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

/*
|--------------------------------------------------------------------------
| SKLEP (PUBLICZNY)
|--------------------------------------------------------------------------
*/
Route::get('/', [ProductController::class, 'index'])
    ->name('shop.index');

Route::get('/product/{product}', [ProductController::class, 'show'])
    ->name('shop.show');

/*
|--------------------------------------------------------------------------
| PROFIL (AUTH) dla usera itp
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
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

        // PANEL GŁÓWNY (KAFELKI)
        Route::get('/', function () {
            return view('dashboard.admin');
        })->name('dashboard');

        // UŻYTKOWNICY
        Route::resource('users', UserController::class)
            ->except(['show']);

        // PRODUKTY
        Route::resource('products', AdminProductController::class)
            ->except(['show']);
    });

/*
|--------------------------------------------------------------------------
| KOSZYK (PLACEHOLDER)
|--------------------------------------------------------------------------
*/
Route::post('/cart/add/{product}', function () {
    return back()->with('success', 'Dodano do koszyka (placeholder)');
})->middleware('auth')->name('cart.add');

require __DIR__ . '/auth.php';
