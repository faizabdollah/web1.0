<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\CategorieFournisseurSv;
use App\Models\ProduitImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ModifierProduitController extends Controller
{
    public function edit($id)
    {
        $produit = Produit::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();
        $categories = CategorieFournisseurSv::where('mail', Auth::user()->email)->get();
        $date = now()->format('Y-m-d');

        return view('admin.ModifierProduitSV', compact('produit', 'categories', 'date'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required|string',
            'nom' => 'required|string',
            'nom_en' => 'nullable|string',
            'nom_l3' => 'nullable|string',
            'empl' => 'nullable|string',
            'ref' => 'nullable|string',
            'prix' => 'required|numeric',
            'prix_barre' => 'nullable|numeric',
            'description_p' => 'nullable|string',
            'description_p_en' => 'nullable|string',
            'description_p_l3' => 'nullable|string',
            'description' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_l3' => 'nullable|string',
            'video' => 'nullable|string',
            'video_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'map' => 'nullable|string',
            'metatitre' => 'nullable|string',
            'metadescription' => 'nullable|string',
            'keyword' => 'nullable|string',
            'img' => 'nullable|array',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $produit = Produit::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();

        $data = $request->except(['_token', 'img', 'video_img']);
        $produit->update($data);

        // Handle gallery images
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $imageFile) {
                if ($imageFile->isValid()) {
                    $path = $imageFile->store('produit_images', 'public');
                    ProduitImage::create([
                        'produit_id' => $id,
                        'img' => $path,
                    ]);
                }
            }
        }

        // Handle video image upload to public/image_sv
        if ($request->hasFile('video_img')) {
            // Delete old image if exists
            if ($produit->video_img) {
                $oldPath = public_path($produit->video_img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('video_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image_sv'), $filename);
            $produit->video_img = 'image_sv/' . $filename;
            $produit->save();
        }

        return redirect()->route('admin.detail-produit', $id)->with('success', 'Produit mis à jour avec succès.');
    }
}
