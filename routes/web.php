<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoutSafe\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutSafe\VoitureController;
use App\Http\Controllers\ControleConformController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\AutomobileController;
use App\Http\Controllers\Admin\AmendeController;
use App\Http\Controllers\FactureController;




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

    Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');

    Route::get('/controleConform', [ControleConformController::class, 'index'])->name('controleConform');




    Route::get('/voiture', [VoitureController::class, 'index'])->name('voiture.index');
    Route::get('/create_voiture', [VoitureController::class, 'create'])->name('voiture.create');
    Route::post('/voitures', [VoitureController::class, 'store'])->name('voiture.store');
    Route::get('/voiture_id', [VoitureController::class, 'detail'])->name('voiture.detail');
    Route::get('/voiture_{id}', [VoitureController::class, 'show'])->name('detail');



    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/create_contact', [ContactController::class, 'store'])->name('contact.store');


    Route::get('/statut', function () {
        return view('statut');
    })->name('statut');


    Route::get('/about', function () {
        return view('about');
    })->name('about');
});

    Route::get('/admin/automobiles', [AutomobileController::class, 'index'])->name('admin.automobiles.index');
    Route::get('/admin_automobiles_search', [AutomobileController::class, 'search'])->name('admin.automobiles.search');


    Route::get('/admin_automobiles_{automobile}_amendes_create', [AmendeController::class, 'create'])->name('admin.amendes.create');
    Route::post('/admin_automobiles_{automobile}_amendes', [AmendeController::class, 'store'])->name('admin.amendes.store');
    Route::get('/routesafe_amendes', [AmendeController::class, 'index'])->name('routesafe.amendes.index');


    Route::get('/routesafe/factures', [FactureController::class, 'index'])->name('routesafe.factures.index');

    Route::post('/kkiapay/callback', [PaymentController::class, 'handleCallback'])->name('kkiapay.callback');
    
    
require __DIR__ . '/auth.php';
