<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider; // Make sure you have a Slider model
use App\Models\Fournisseur; // Make sure you have a Fournisseur model
use App\Models\ImgSv; // Make sure you have an ImgSv model
use App\Models\Reference; // Make sure you have a Reference model
use App\Models\Produit; // Make sure you have a Produit model
use App\Models\ProduitImage; // Make sure you have a ProduitImage model
use App\Models\ImageCategory; // Make sure you have an ImageCategory model
use App\Models\TextCategory; // Make sure you have a TextCategory model
use App\Http\Controllers\Admin\MesProduitController;
use App\Http\Controllers\Admin\DetailProduitController;
use App\Http\Controllers\Admin\AjouterProduitImageController;
use App\Http\Controllers\Admin\ModifierProduitController;
use App\Http\Controllers\Admin\CategorieFournisseurSvController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\Admin\ModifierInfoController;

Route::get('/updateinfo', [ModifierInfoController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');

Route::post('/updateinfo', [ModifierInfoController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/mes-produits', [MesProduitController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.mes-produits');

Route::get('/admin/ajouter-produit', [MesProduitController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.produits.create');
Route::post('/admin/produits', [MesProduitController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.produits.store');

Route::get('/admin/ajouter-categorie', [CategorieFournisseurSvController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.ajouter-categorie');
Route::post('/admin/categories', [CategorieFournisseurSvController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.categories.store');

Route::get('/admin/detail-produit/{id}', [DetailProduitController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.detail-produit');

Route::get('/admin/produit-img-sup/{id}', [DetailProduitController::class, 'destroyImage'])->middleware(['auth', 'verified'])->name('admin.produit-img-sup');

Route::get('/admin/ajouter-produit-image/{produit_id}', [AjouterProduitImageController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.ajouter-produit-image.create');
Route::post('/admin/ajouter-produit-image/{produit_id}', [AjouterProduitImageController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.ajouter-produit-image.store');

Route::get('/admin/modifier-produit/{id}', [ModifierProduitController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.modifier-produit.edit');
Route::post('/admin/modifier-produit/{id}', [ModifierProduitController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.modifier-produit.update');

Route::get('/admin/supprimer-produit/{id}', [DetailProduitController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.supprimer-produit');

Route::get('/admin/categories', [CategorieFournisseurSvController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.categories.index');
Route::get('/admin/categories/create', [CategorieFournisseurSvController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.categories.create');
Route::post('/admin/categories', [CategorieFournisseurSvController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.categories.store');
Route::get('/admin/categories/{id}/edit', [CategorieFournisseurSvController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.categories.edit');
Route::put('/admin/categories/{id}', [CategorieFournisseurSvController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.categories.update');
Route::delete('/admin/categories/{id}', [CategorieFournisseurSvController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.categories.destroy');

Route::get('/admin/modifier-image/{id}', [DetailProduitController::class, 'showImageForm'])->middleware(['auth', 'verified'])->name('admin.modifier-image');
Route::post('/admin/modifier-image/{id}', [DetailProduitController::class, 'updateMainImage'])->middleware(['auth', 'verified'])->name('admin.modifier-image.update');

Route::post('/admin/update-main-image/{id}', [DetailProduitController::class, 'updateMainImage'])->middleware(['auth', 'verified'])->name('admin.update-main-image');

Route::get('/mes-produits', [MesProduitController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.mes-produits');

Route::get('/admin/detail-produit/{id}', [DetailProduitController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.detail-produit');

Route::get('/mes-produits', [MesProduitController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.mes-produits');

require __DIR__.'/auth.php';

// Simple routes for main pages
Route::get('/about', function () {
    $text_about = \App\Models\text_about::first();
    $image_abouts = \App\Models\image_about::first();
    $img_sv = \App\Models\ImgSv::first();
    $image_category = \App\Models\ImageCategory::first();
    $text_category = \App\Models\TextCategory::first();

    // Map img_sv fields to $image_about structure expected by view
    $image_about = (object) [
        'img1' => $img_sv ? $img_sv->about1 : null,
        'img2' => $img_sv ? $img_sv->about2 : null,
        'img3' => $img_sv ? $img_sv->produit : null, // Placeholder for img3; adjust based on data
        'img4' => $img_sv ? $img_sv->produit : null, // Placeholder for img4
        'img5' => $img_sv ? $img_sv->contact1 : null, // Placeholder for img5
        // Add more if needed for img6-img10
    ];

    // Create collections for looped views; adjust based on actual data structure
    $galerie = \App\Models\Galerie::all();

    $reference = \App\Models\Reference::all(); // From dedicated reference table

    return view('about', compact('text_about', 'image_about', 'image_abouts', 'galerie', 'reference'));
})->name('about');

Route::get('/contact', function () {
    $image_category2 = \App\Models\ImageCategory::first();
    $text_contact = \App\Models\TextCategory::first(); // Assuming TextCategory for text_contact; adjust if separate model
    $fournisseurs = \App\Models\Fournisseur::first();
    $map = null; // Placeholder for map; add config or model if needed

    return view('contact', compact('image_category2', 'text_contact', 'fournisseurs', 'map'));
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'message' => 'required|string',
    ]);

    // Handle form submission (e.g., save to DB, send email)
    // For now, return success
    return redirect()->back()->with('session', 'Message sent successfully!');

})->name('contact.submit');

Route::get('/details/{id}', function ($id) {
    $details = \App\Models\Produit::find($id);
    if (!$details) {
        return redirect('/produit');
    }
    $image_category = \App\Models\ImageCategory::first();
    $text_category = \App\Models\TextCategory::first();
    $produit_image = \App\Models\ProduitImage::where('produit_id', $id)->get();

    return view('details', compact('details', 'image_category', 'text_category', 'produit_image'));
})->name('details');

Route::get('/gallery', function () {
    $image_category2 = ImageCategory::first();
    $text_category = TextCategory::first();

    $galerie = \App\Models\Galerie::all();

    return view('gallery', compact('image_category2', 'text_category', 'galerie'));
})->name('gallery');

Route::get('/produit/{categorie?}', function ($categorie = null) {
    $image_category = \App\Models\ImageCategory::first();
    $text_category = \App\Models\TextCategory::first();

    $produit = $categorie ? Produit::where('categorie', $categorie)->get() : Produit::all();
    $produit_image = ProduitImage::all();

    return view('produit', compact('image_category', 'text_category', 'produit', 'produit_image', 'categorie'));
})->name('produit');

Route::get('/', function () {
    $sliders = Slider::all();               // multiple sliders
    $fournisseurs = Fournisseur::first();    // just one fournisseur
    $images = ImgSv::first();
    $categorie_fournisseur_sv = \App\Models\CategorieFournisseurSv::all(); // For categories loops in welcome view
    $reference = \App\Models\Reference::all(); // From dedicated reference table for clients loop

    return view('welcome', compact('sliders', 'fournisseurs', 'images', 'categorie_fournisseur_sv', 'reference'));
})->name('home');
