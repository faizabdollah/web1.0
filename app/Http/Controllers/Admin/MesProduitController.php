<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\ProduitImage;

class MesProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::where('mail', Auth::user()->email)->get();
        $totalRows = $produits->count();
        return view('admin.MesProduit', compact('produits', 'totalRows'));
    }

    public function create()
    {
        $categories = \App\Models\CategorieFournisseurSv::all();
        return view('admin.AjouterProduit', compact('categories'));
    }

    /**
     * Display product details by redirecting.
     */
    public function show($id)
    {
        return redirect()->route('admin.detail-produit', $id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ref' => 'nullable|string|max:255|unique:produit,ref',
            'nom' => 'required|string|max:255',
            'nom_en' => 'nullable|string|max:255',
            'nom_l3' => 'nullable|string|max:255',
            'empl' => 'nullable|string|max:255',
            'categorie' => 'required|string|max:255',
            'description' => 'required|string',
            'description_en' => 'nullable|string',
            'description_l3' => 'nullable|string',
            'description_p' => 'nullable|string',
            'description_p_en' => 'nullable|string',
            'description_p_l3' => 'nullable|string',
            'prix' => 'nullable|numeric|min:0',
            'prix_barre' => 'nullable|numeric|min:0',
            'video' => 'nullable|string|max:1000',
            'video_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'map' => 'nullable|string|max:1000',
            'metatitre' => 'nullable|string|max:255',
            'metadescription' => 'nullable|string|max:500',
            'keyword' => 'nullable|string|max:500',
            'img.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $validated['mail'] = Auth::user()->email;
        $validated['date'] = now()->format('Y-m-d');

        $produit = Produit::create($validated);

        // Handle multiple gallery images
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $imageFile) {
                if ($imageFile->isValid()) {
                    $path = $imageFile->store('produit_images', 'public');
                    \App\Models\ProduitImage::create([
                        'produit_id' => $produit->id,
                        'img' => $path,
                    ]);
                }
            }
        }

        // Handle video image upload to public/image_sv
        if ($request->hasFile('video_img')) {
            $file = $request->file('video_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image_sv'), $filename);
            $produit->video_img = 'image_sv/' . $filename;
            $produit->save();
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Produit ajouté avec succès.',
                'id' => $produit->id, // Include the product ID in the response
            ]);
        }

        return redirect()->route('admin.produits.index')
                        ->with('success', 'Produit ajouté avec succès.');
    }
    /**
     * Delete a product and its images.
     */
    public function destroy($id)
    {
        $produit = Produit::where('id', $id)
            ->where('mail', Auth::user()->email)
            ->firstOrFail();

        // Delete gallery images
        $images = ProduitImage::where('produit_id', $id)->get();
        foreach ($images as $image) {
            $filePath = public_path($image->img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $image->delete();
        }

        // Delete main product images (img, img2...img10)
        $imgFields = ['img','img2','img3','img4','img5','img6','img7','img8','img9','img10'];
        foreach ($imgFields as $field) {
            if ($produit->$field) {
                $filePath = public_path($produit->$field);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Delete video image
        if ($produit->video_img) {
            $filePath = public_path($produit->video_img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete product record
        $produit->delete();

        return redirect()->route('admin.produits.index')
                         ->with('success', 'Produit supprimé avec succès.');
    }
}
