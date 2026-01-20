<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CheckoutController;
use App\Livewire\CartPage;


Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('welcome');
});

Route::get('/shop', [ShopController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/products/{product}', [ShopController::class, 'show'])
    ->middleware(['auth'])
    ->name('shop.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cart', CartPage::class)->name('cart');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');
    Route::post('/checkout/pay', [CheckoutController::class, 'pay'])->name('checkout.pay');
    Route::get('/checkout/success/{order}', [CheckoutController::class, 'success'])->name('checkout.success');
});

Route::middleware('auth')->get('/my-orders', function () {
    $orders = auth()->user()
        ->orders()
        ->latest()
        ->get();

    return view('orders.my-orders', compact('orders'));
})->name('orders.mine');
