<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('profile', 'profile')->name('profile');

    Route::get('characters', [\App\Http\Controllers\CharacterController::class, 'index'])->name('characters.index');

    Route::get('characters/{character}', [\App\Http\Controllers\CharacterController::class, 'show'])->name('characters.show');

    Route::get('characters/create', [\App\Http\Controllers\CharacterController::class, 'create'])->name('characters.create');

    Route::post('/logout', Logout::class)->name('logout');
    
});

require __DIR__.'/auth.php';
