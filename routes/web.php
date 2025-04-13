<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('admin/dashboard', 'admin.dashboard')->name('admin.dashboard');

    // Route::redirect('admin/settings', 'settings/profile');
    Route::get('admin/settings/profile', Profile::class)->name('admin.settings.profile');
    Route::get('admin/settings/password', Password::class)->name('admin.settings.password');
    Route::get('admin/settings/appearance', Appearance::class)->name('admin.settings.appearance');
});

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
    // Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
