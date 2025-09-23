<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\ProduitImage;
use Illuminate\Support\Facades\Auth;

class DetailProduitController extends Controller
{
    public function show($id)
    {
        $produit = Produit::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();
        $images = ProduitImage::where('produit_id', $id)->where('mail', Auth::user()->email)->get();

        return view('admin.DetailProduitDisponibleSV', compact('produit', 'images'));
    }

    public function destroyImage($id)
    {
        $image = ProduitImage::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();

        // Delete the physical file
        $filePath = public_path($image->img);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete the record
        $image->delete();

        return redirect()->back()->with('success', 'Image supprimée avec succès.');
    }

    public function showImageForm($id)
    {
        $produit = Produit::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();

        return view('admin.ModifierImage', compact('produit'));
    }

    public function updateMainImage(Request $request, $id)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $produit = Produit::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();

        // Delete old image if exists
        if ($produit->img) {
            $oldPath = public_path($produit->img);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }

        // Upload new image to public/image_sv
        $file = $request->file('img');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('image_sv'), $filename);
        $produit->img = 'image_sv/' . $filename;
        $produit->save();

        return redirect()->route('admin.detail-produit', $id)->with('success', 'Image principale mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $produit = Produit::where('id', $id)->where('mail', Auth::user()->email)->firstOrFail();

        // Delete associated images and files from produit_image
        $images = ProduitImage::where('produit_id', $id)->get();
        foreach ($images as $image) {
            $filePath = public_path($image->img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $image->delete();
        }

        // Delete main product images from produit table (img, img2 to img10)
        $imgFields = ['img', 'img2', 'img3', 'img4', 'img5', 'img6', 'img7', 'img8', 'img9', 'img10'];
        foreach ($imgFields as $field) {
            if ($produit->$field) {
                $filePath = public_path($produit->$field);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Delete video_img if exists
        if ($produit->video_img) {
            $filePath = public_path($produit->video_img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete the product
        $produit->delete();

        return redirect()->route('admin.produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}
