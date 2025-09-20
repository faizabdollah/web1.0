<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\text_about;

class TextAboutController extends Controller
{
    public function edit($id)
    {
        $text_about = text_about::findOrFail($id);
        return view('admin.textabouts.edit', compact('text_about'));
    }

    public function update(Request $request, $id)
    {
        $text_about = text_about::findOrFail($id);

        $rules = [];
        for ($i = 1; $i <= 30; $i++) {
            $rules["text{$i}"] = 'nullable|string';
        }
        $request->validate($rules);

        $text_about->update($request->only(array_keys($rules)));

        return redirect()->route('admin.textabouts.edit', $text_about->id)
                         ->with('success', 'TextAbout updated successfully.');
    }
}
