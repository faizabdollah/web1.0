<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TextSv;

class TextSvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $texts = TextSv::all();
        return view('admin.text-sv.index', compact('texts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TextSv $textSv)
    {
        return view('admin.text-sv.edit', compact('textSv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TextSv $textSv)
    {
        // Build validation rules
        $rules = [
            'language' => 'required|string|max:10',
            'mail' => 'nullable|email',
        ];

        // Add text1 to text25 validation rules
        for ($i = 1; $i <= 25; $i++) {
            $rules["text{$i}"] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        $textSv->update($validated);

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Texte SV mis à jour avec succès.'
            ]);
        }

        return redirect()->route('admin.text-sv.index')
                        ->with('success', 'Texte SV mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TextSv $textSv)
    {
        $textSv->delete();

        return redirect()->route('admin.text-sv.index')
                        ->with('success', 'Texte SV supprimé avec succès.');
    }
}
