<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider; // Make sure you have a Slider model
use App\Models\Fournisseur; // Make sure you have a Fournisseur model
use App\Models\ImgSv; // Make sure you have an ImgSv model
use App\Models\Reference; // Make sure you have a Reference model


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Simple routes for main pages
Route::get('/about', function () {
    $text_about = \App\Models\text_about::first();
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
    $galerie = collect([
        (object) ['img' => $image_category ? $image_category->img1 : null],
        (object) ['img' => $image_category ? $image_category->img2 : null],
        (object) ['img' => $image_category ? $image_category->img3 : null],
        (object) ['img' => $image_category ? $image_category->img4 : null],
        (object) ['img' => $image_category ? $image_category->img5 : null],
    ])->filter()->values(); // Remove nulls if any, reindex

    $reference = \App\Models\Reference::all(); // From dedicated reference table

    return view('about', compact('text_about', 'image_about', 'galerie', 'reference'));
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/details', function () {
    return view('details');
})->name('details');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/produit', function () {
    return view('produit');
})->name('produit');

Route::get('/', function () {
    $sliders = Slider::all();               // multiple sliders
    $fournisseurs = Fournisseur::first();    // just one fournisseur
    $images = ImgSv::first();
    $categorie_fournisseur_sv = \App\Models\CategorieFournisseurSv::all(); // For categories loops in welcome view
    $reference = \App\Models\Reference::all(); // From dedicated reference table for clients loop

    return view('welcome', compact('sliders', 'fournisseurs', 'images', 'categorie_fournisseur_sv', 'reference'));
})->name('home');
