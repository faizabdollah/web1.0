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
}
