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
use App\Http\Controllers\Admin\GalerieController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ModifierInfoController;
use App\Http\Controllers\Admin\TextContactController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Admin\PixelController;

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
        Route::resource('textcontacts', TextContactController::class)->only(['edit', 'update']);
        // Routes for modifying main product image
        Route::get('modifier-image/{id}', [App\Http\Controllers\Admin\DetailProduitController::class, 'showImageForm'])->name('modifier-image.edit');
        Route::post('modifier-image/{id}', [App\Http\Controllers\Admin\DetailProduitController::class, 'updateMainImage'])->name('modifier-image.update');
        Route::resource('imageabouts', ImageAboutController::class)->only(['edit', 'update']);
        Route::resource('galerie', GalerieController::class);
        // Galerie CRUD

        Route::get('logo', [LogoController::class, 'edit'])->name('logo.edit');
        Route::post('logo', [LogoController::class, 'update'])->name('logo.update');

        Route::get('Meta/{id}/edit', [MetaController::class, 'edit'])->name('Meta.edit');
        Route::post('Meta/{id}', [MetaController::class, 'update'])->name('Meta.update');
        // MetaController routes

        Route::get('Pixel/{id}/edit', [PixelController::class, 'edit'])->name('Pixel.edit');
        Route::post('Pixel/{id}', [PixelController::class, 'update'])->name('Pixel.update');
        // PixelController routes

        Route::get('password/change', function () {
            return view('admin.password-change');
        })->name('password.change');

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
