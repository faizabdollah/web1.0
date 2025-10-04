<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function edit()
    {
        $logo = Fournisseur::first();
        return view('admin.logo.edit', compact('logo'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fournisseur = Fournisseur::first();

        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($fournisseur->logo && file_exists(public_path($fournisseur->logo))) {
                unlink(public_path($fournisseur->logo));
            }

            // Generate unique filename
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();

            // Move file to public/image_sv directory
            $request->file('logo')->move(public_path('image_sv'), $fileName);

            // Store relative path in database
            $fournisseur->logo = 'image_sv/' . $fileName;
            $fournisseur->save();
        }

        return redirect()->route('admin.logo.edit')->with('success', 'Logo updated successfully.');
    }
}
