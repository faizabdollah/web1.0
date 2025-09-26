<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Fournisseur;
use App\Models\ImgSv;
use App\Models\Reference;
use App\Models\Produit;
use App\Models\ProduitImage;
use App\Models\ImageCategory;
use App\Models\TextCategory;
use App\Models\Galerie;
use App\Models\CategorieFournisseurSv;
use App\Models\text_about;
use App\Models\image_about;
use App\Models\text_contact;

class PageController extends Controller
{
    /**
     * Display the homepage.
     */
    public function home()
    {
        return view('welcome', [
            'sliders' => Slider::all(),
            'fournisseurs' => Fournisseur::first(),
            'images' => ImgSv::first(),
            'categorie_fournisseur_sv' => CategorieFournisseurSv::all(),
            'reference' => Reference::all(),
        ]);
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('about', [
            'text_about' => text_about::first(),
            'image_about' => image_about::first(),
            'galerie' => Galerie::all(),
            'reference' => Reference::all(),
        ]);
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('contact', [
            'image_category2' => ImageCategory::first(),
            'text_contact' => text_contact::first(),
            'fournisseurs' => Fournisseur::first(),
            'map' => null,
        ]);
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Process the data (e.g., save to DB or send email)

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Display the gallery page.
     */
    public function gallery()
    {
        return view('gallery', [
            'image_category2' => ImageCategory::first(),
            'text_category'   => TextCategory::first(),
            'galerie'         => Galerie::all(),
        ]);
    }

    /**
     * Display the products listing.
     */
    public function produit($categorie = null)
    {
        return view('produit', [
            'image_category'  => ImageCategory::first(),
            'text_category'   => TextCategory::first(),
            'produit'         => $categorie ? Produit::where('categorie', $categorie)->get() : Produit::all(),
            'produit_image'   => ProduitImage::all(),
            'categorie'       => $categorie,
        ]);
    }

    /**
     * Display product details.
     */
    public function details($id)
    {
        $details = Produit::find($id);
        if (!$details) {
            return redirect()->route('produit');
        }

        return view('details', [
            'details'        => $details,
            'image_category' => ImageCategory::first(),
            'text_category'  => TextCategory::first(),
            'produit_image'  => ProduitImage::where('produit_id', $id)->get(),
        ]);
    }
}
