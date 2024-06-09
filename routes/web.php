<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoutSafe\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutSafe\VoitureController;
use App\Http\Controllers\ControleConformController;
use App\Http\Controllers\PaymentController;

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

   // Route pour admin
   Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');

    // Route pour controle de conformité de l'admin
    Route::get('/controleConform', [ControleConformController::class, 'index'])->name('controleConform');
    

// Route pour le paiement 

Route::get('payment', [PaymentController::class, 'payement'])->name('payment');


    // Route pour voiture
    Route::get('/voiture', [VoitureController::class, 'index'])->name('voiture.index');
    Route::get('/create_voiture', [VoitureController::class, 'create'])->name('voiture.create');
    Route::post('/voitures', [VoitureController::class, 'store'])->name('voiture.store');
    Route::get('/voiture_id',[VoitureController::class, 'detail'])->name('voiture.detail');
    Route::get('/voiture/{id}', [VoitureController::class, 'show'])->name('detail');



    //Route pour Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/create_contact', [ContactController::class, 'store'])->name('contact.store');
    
    //Route pour contrôle de conformité
    Route::get('/statut', function () {
        return view('statut');
    })->name('statut'); // Assurez-vous que la route est nommée 'statut'
    
    //Route pour la page à propos
    Route::get('/about', function () {
        return view('about');
    })->name('about');

 

    
    });
    
require __DIR__ . '/auth.php';
