<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galerie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the gallery items.
     */
    public function index()
    {
        $items = Galerie::where('mail', Auth::user()->email)->get();
        return view('admin.gallery.index', compact('items'));
    }

    /**
     * Show the form for creating a new gallery item.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created gallery item in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img'   => 'required|array',
            'img.*' => 'image|mimes:jpg,jpeg,png|max:5000',
        ]);

        $uploadPath = public_path('img_sv/galerie');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        foreach ($request->file('img') as $file) {
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);

            Galerie::create([
                'img'  => 'img_sv/galerie/' . $filename,
                'mail' => Auth::user()->email,
            ]);
        }

        return redirect()->route('admin.galerie.index')->with('success', 'Images ajoutées avec succès.');
    }

    /**
     * Show the form for editing the specified gallery item.
     */
    public function edit(Galerie $galerie)
    {
        return view('admin.gallery.edit', compact('galerie'));
    }

    /**
     * Update the specified gallery item in storage.
     */
    public function update(Request $request, Galerie $galerie)
    {
        $request->validate([
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
        ]);

        if ($request->hasFile('img')) {
            // Delete old file
            $old = public_path($galerie->img);
            if (file_exists($old)) {
                unlink($old);
            }
            $file = $request->file('img');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('img_sv/galerie');
            $file->move($uploadPath, $filename);
            $galerie->img = 'img_sv/galerie/' . $filename;
        }

        $galerie->save();

        return redirect()->route('admin.galerie.index')->with('success', 'Image mise à jour avec succès.');
    }

    /**
     * Remove the specified gallery item from storage.
     */
    public function destroy(Galerie $galerie)
    {
        $filePath = public_path($galerie->img);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $galerie->delete();

        return redirect()->route('admin.galerie.index')->with('success', 'Image supprimée avec succès.');
    }
}
