<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImgSv;
use Illuminate\Support\Facades\Storage;

class ImageSvController extends Controller
{
    /**
     * Show the form for editing SV images
     */
    public function edit()
    {
        $imgSv = ImgSv::first(); // Assuming there's only one record
        if (!$imgSv) {
            $imgSv = ImgSv::create([]); // Create if doesn't exist
        }
        return view('admin.img-sv.edit', compact('imgSv'));
    }

    /**
     * Update the SV images
     */
    public function update(Request $request)
    {
        $imgSv = ImgSv::first();
        if (!$imgSv) {
            $imgSv = ImgSv::create([]);
        }

        $rules = [];
        $fields = ['about1', 'about2', 'produit', 'det_produit', 'contact1', 'mail', 'page'];

        foreach ($fields as $field) {
            $rules[$field] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $request->validate($rules);

        $data = [];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                // Delete old image if exists
                if ($imgSv->{$field} && file_exists(public_path($imgSv->{$field}))) {
                    unlink(public_path($imgSv->{$field}));
                }

                // Upload new image
                $imageName = time() . '_' . $field . '.' . $request->file($field)->getClientOriginalExtension();
                $request->file($field)->move(public_path('image_sv'), $imageName);
                $data[$field] = 'image_sv/' . $imageName;
            }
        }

        if (!empty($data)) {
            $imgSv->update($data);
        }

        return redirect()
            ->route('admin.img-sv.edit')
            ->with('success', 'Images SV mises à jour avec succès.');
    }

    /**
     * Delete specific SV image
     */
    public function destroy($field)
    {
        $imgSv = ImgSv::first();

        if ($imgSv && $imgSv->{$field} && file_exists(public_path($imgSv->{$field}))) {
            unlink(public_path($imgSv->{$field}));
            $imgSv->{$field} = null;
            $imgSv->save();
        }

        return redirect()
            ->route('admin.img-sv.edit')
            ->with('success', 'Image supprimée avec succès.');
    }
}
