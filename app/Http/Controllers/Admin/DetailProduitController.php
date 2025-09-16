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
}
