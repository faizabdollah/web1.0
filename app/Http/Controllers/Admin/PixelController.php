<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pixel;

class PixelController extends Controller
{
    public function edit($id)
    {
        $pixel = Pixel::findOrFail($id);
        return view('admin.Pixel', compact('pixel'));
    }

    public function update(Request $request, $id)
    {
        $pixel = Pixel::findOrFail($id);

        $pixel->pixel = $request->input('pixel');
        $pixel->pixel2 = $request->input('pixel2');
        $pixel->pixel3 = $request->input('pixel3');
        $pixel->pixel4 = $request->input('pixel4');
        $pixel->pixel5 = $request->input('pixel5');

        if ($pixel->save()) {
            return redirect()->route('admin.Pixel.edit', $pixel->id)->with('success', 'Pixel updated successfully.');
        } else {
            dd('save failed');
        }
    }
}

