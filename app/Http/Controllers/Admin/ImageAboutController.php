<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image_about;
use Illuminate\Support\Facades\Storage;

class ImageAboutController extends Controller
{
    public function edit($id)
    {
        $image_about = image_about::findOrFail($id);
        return view('admin.imageabouts.edit', compact('image_about'));
    }

    public function update(Request $request, $id)
    {
        $image_about = image_about::findOrFail($id);

        $rules = [];
        for ($i = 1; $i <= 10; $i++) {
            $rules["img{$i}"] = 'nullable|image|max:2048';
        }
        $request->validate($rules);

        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            if ($request->hasFile("img{$i}")) {
                if ($image_about->{"img{$i}"}) {
                    $oldPath = public_path($image_about->{"img{$i}"});
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }
                $file = $request->file("img{$i}");
                $filename = time() . "_{$i}." . $file->getClientOriginalExtension();
                $file->move(public_path('image_sv'), $filename);
                $data["img{$i}"] = 'image_sv/' . $filename;
            }
        }

        $image_about->update($data);

        return redirect()
            ->route('admin.imageabouts.edit', $image_about->id)
            ->with('success', 'ImageAbout updated successfully.');
    }
}
