<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;

class MesProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::where('mail', Auth::user()->email)->get();
        $totalRows = $produits->count();
        return view('admin.MesProduit', compact('produits', 'totalRows'));
    }
}
