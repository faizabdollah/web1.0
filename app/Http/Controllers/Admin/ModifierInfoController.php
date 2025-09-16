<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\Auth;

class ModifierInfoController extends Controller
{
    public function index()
    {
        $fournisseur = Fournisseur::where('mail', Auth::user()->email)->firstOrFail();
        return view('admin.ModifierInfo', compact('fournisseur'));
    }

    public function update(Request $request)
    {
        $fournisseur = Fournisseur::where('mail', Auth::user()->email)->firstOrFail();

        // Prepend http:// to site_web if provided without protocol
        if ($request->filled('site_web') && !str_starts_with($request->site_web, 'http')) {
            $request->merge(['site_web' => 'http://' . $request->site_web]);
        }

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'raison_sociale' => 'nullable|string|max:255',
            'gsm' => 'nullable|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'tel1' => 'nullable|string|max:20',
            'tel2' => 'nullable|string|max:20',
            'mail2' => 'nullable|email|max:255',
            'site_web' => 'nullable|url|max:255',
            'adresse' => 'nullable|string',
            'description_p' => 'nullable|string',
            'description' => 'nullable|string',
            'description_p_en' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_p_l3' => 'nullable|string',
            'description_l3' => 'nullable|string',
            'description_p_l4' => 'nullable|string',
            'description_l4' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'face' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'pinterest' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'skype' => 'nullable|string|max:255',
            'nom_en' => 'nullable|string|max:255',
            'nom_l3' => 'nullable|string|max:255',
            'nom_l4' => 'nullable|string|max:255',
        ]);

        $fournisseur->update($request->except(['_token', '_method']));

        return redirect()->back()->with('success', 'Informations modifiées avec succès.');
    }
}
