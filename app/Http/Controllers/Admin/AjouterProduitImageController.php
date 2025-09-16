<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Fournisseur;
use App\Models\ProduitImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AjouterProduitImageController extends Controller
{
    public function create($produit_id)
    {
        $produit = Produit::where('id', $produit_id)->where('mail', Auth::user()->email)->firstOrFail();
        $fournisseur = Fournisseur::where('mail', Auth::user()->email)->firstOrFail();

        return view('admin.AjouterProduitImage', compact('produit', 'fournisseur'));
    }

    public function store(Request $request, $produit_id)
    {
        $produit = Produit::where('id', $produit_id)->where('mail', Auth::user()->email)->firstOrFail();
        $fournisseur = Fournisseur::where('mail', Auth::user()->email)->firstOrFail();

        $request->validate([
            'img.*' => 'required|image|mimes:jpg,jpeg,png|max:4000', // Multiple files
        ]);

        $uploadPath = public_path('img_sv/produit_image');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $page = $fournisseur->page ? $fournisseur->page : 1;
        $mail = Auth::user()->email;

        foreach ($request->file('img') as $image) {
            try {
                $fileName = 'page-' . time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($uploadPath, $fileName);

                ProduitImage::create([
                    'mail' => $mail,
                    'produit_id' => $produit_id,
                    'page' => $page,
                    'img' => 'img_sv/produit_image/' . $fileName,
                ]);
            } catch (\Exception $e) {
                // Log error or handle, but continue for other images
                Log::error('Image upload failed: ' . $e->getMessage());
            }
        }

        return redirect()->route('admin.detail-produit', $produit_id)->with('success', 'Images ajoutées avec succès.');
    }
}
