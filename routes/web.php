<?php

use Livewire\Volt\Volt;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/berita', [FrontController::class, 'berita'])->name('berita');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');






Route::middleware(['auth', 'verified'])->group(function () {
    // Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

});

require __DIR__ . '/auth.php';