<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MesProduitController;
use App\Http\Controllers\Admin\DetailProduitController;
use App\Http\Controllers\Admin\AjouterProduitImageController;
use App\Http\Controllers\Admin\ModifierProduitController;
use App\Http\Controllers\Admin\CategorieFournisseurSvController;
use App\Http\Controllers\Admin\TextAboutController;
use App\Http\Controllers\Admin\ImageAboutController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ModifierInfoController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('sliders', SliderController::class);
        Route::resource('categories', CategorieFournisseurSvController::class);
        // Route for deleting a product via GET, placed before resource to avoid conflict with show
        Route::get('produits/delete/{id}', [MesProduitController::class, 'destroy'])->name('produits.delete');
        Route::resource('produits', MesProduitController::class)->only(['index', 'create', 'store', 'show']);

        Route::get('detail-produit/{id}', [DetailProduitController::class, 'show'])->name('detail-produit');
        Route::get('modifier-produit/{id}', [ModifierProduitController::class, 'edit'])->name('modifier-produit.edit');
        Route::post('modifier-produit/{id}', [ModifierProduitController::class, 'update'])->name('modifier-produit.update');
        // Route for deleting a product via GET

        Route::get('ajouter-produit-image/{produit_id}', [AjouterProduitImageController::class, 'create'])->name('ajouter-produit-image.create');
        Route::post('ajouter-produit-image/{produit_id}', [AjouterProduitImageController::class, 'store'])->name('ajouter-produit-image.store');

        Route::get('updateinfo', [ModifierInfoController::class, 'index'])->name('updateinfo');
        Route::post('updateinfo', [ModifierInfoController::class, 'update'])->name('updateinfo.update');

        Route::resource('textabouts', TextAboutController::class)->only(['edit', 'update']);
        // Routes for modifying main product image
        Route::get('modifier-image/{id}', [App\Http\Controllers\Admin\DetailProduitController::class, 'showImageForm'])->name('modifier-image.edit');
        Route::post('modifier-image/{id}', [App\Http\Controllers\Admin\DetailProduitController::class, 'updateMainImage'])->name('modifier-image.update');
        Route::resource('imageabouts', ImageAboutController::class)->only(['edit', 'update']);
    });
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/produit/{categorie?}', [PageController::class, 'produit'])->name('produit');
Route::get('/details/{id}', [PageController::class, 'details'])->name('details');

require __DIR__ . '/auth.php';
