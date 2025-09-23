<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'nom_en' => 'nullable|string|max:255',
            'nom_l3' => 'nullable|string|max:255',
            'nom_l4' => 'nullable|string|max:255',
            'nom2' => 'nullable|string|max:255',
            'nom2_en' => 'nullable|string|max:255',
            'nom2_l3' => 'nullable|string|max:255',
            'nom2_l4' => 'nullable|string|max:255',
            'p_descri' => 'nullable|string',
            'p_descri_en' => 'nullable|string',
            'p_descri_l3' => 'nullable|string',
            'p_descri_l4' => 'nullable|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Button' => 'nullable|string|max:255',
            'Button_en' => 'nullable|string|max:255',
            'Button_l3' => 'nullable|string|max:255',
            'Button_l4' => 'nullable|string|max:255',
            'lien_desti' => 'nullable|url',
            'mail' => 'nullable|email',
            'page' => 'nullable|string|max:255',
        ]);

        $file = $request->file('img');
        $newName = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('image_sv/images-slider'), $newName);
        $data['img'] = 'image_sv/images-slider/'.$newName;

        Slider::create($data);

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'nom_en' => 'nullable|string|max:255',
            'nom_l3' => 'nullable|string|max:255',
            'nom_l4' => 'nullable|string|max:255',
            'nom2' => 'nullable|string|max:255',
            'nom2_en' => 'nullable|string|max:255',
            'nom2_l3' => 'nullable|string|max:255',
            'nom2_l4' => 'nullable|string|max:255',
            'p_descri' => 'nullable|string',
            'p_descri_en' => 'nullable|string',
            'p_descri_l3' => 'nullable|string',
            'p_descri_l4' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Button' => 'nullable|string|max:255',
            'Button_en' => 'nullable|string|max:255',
            'Button_l3' => 'nullable|string|max:255',
            'Button_l4' => 'nullable|string|max:255',
            'lien_desti' => 'nullable|url',
            'mail' => 'nullable|email',
            'page' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('img')) {
            if (file_exists(public_path($slider->img))) {
                unlink(public_path($slider->img));
            }
            $file = $request->file('img');
            $newName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('image_sv/images-slider'), $newName);
            $data['img'] = 'image_sv/images-slider/'.$newName;
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete($slider->img);
        $slider->delete();

        return redirect()->route('admin.sliders.index')
                         ->with('success', 'Slider deleted successfully.');
    }
}
