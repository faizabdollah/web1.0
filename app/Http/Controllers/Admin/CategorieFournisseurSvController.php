<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieFournisseurSv;
use Illuminate\Http\Request;

class CategorieFournisseurSvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategorieFournisseurSv::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.AjouterCategorie');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = CategorieFournisseurSv::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = CategorieFournisseurSv::findOrFail($id);

        $validated = $request->validate([
            'nom_categorie' => 'required|string|max:255|unique:categorie_fournisseur_sv,nom_categorie,' . $id,
            'description' => 'nullable|string',
            // Add validation for other fields as needed based on the form
        ]);

        $validated['categorie'] = \Illuminate\Support\Str::slug($validated['nom_categorie']);

        $category->update($validated);

        return redirect()->route('admin.categories.index')
                        ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_categorie' => 'required|string|max:255|unique:categorie_fournisseur_sv,nom_categorie',
            'description' => 'nullable|string',
            // Add validation for other fields as needed based on the form
        ]);

        $validated['categorie'] = \Illuminate\Support\Str::slug($validated['nom_categorie']);

        CategorieFournisseurSv::create($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Catégorie créée avec succès.']);
        }

        return redirect()->route('admin.categories.index')
                        ->with('success', 'Categorie créée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $category = CategorieFournisseurSv::findOrFail($id);
        $category->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Catégorie supprimée avec succès.']);
        }

        return redirect()->back()
                        ->with('success', 'Categorie supprimée avec succès.');
    }
}
