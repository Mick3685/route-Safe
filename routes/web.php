<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoutSafe\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutSafe\VoitureController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {


    // Route pour voiture
    Route::get('/voiture', [VoitureController::class, 'index'])->name('voiture.index');
    Route::get('/create_voiture', [VoitureController::class, 'create'])->name('voiture.create');
    Route::post('/voitures', [VoitureController::class, 'store'])->name('voiture.store');

    //Route pour Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/create_contact', [ContactController::class, 'store'])->name('contact.store');


});
require __DIR__ . '/auth.php';
