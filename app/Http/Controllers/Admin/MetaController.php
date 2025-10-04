<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{
    public function edit($id)
    {
        $meta = Meta::findOrFail($id);
        return view('admin.Meta', compact('meta'));
    }

    public function update(Request $request, $id)
    {
        $meta = Meta::findOrFail($id);

        $meta->revisit = $request->input('revisit');
        $meta->abstract = $request->input('abstract');
        $meta->rating = $request->input('rating');
        $meta->author = $request->input('author');
        $meta->robots = $request->input('robots');
        $meta->subject = $request->input('subject');
        $meta->language = $request->input('language');
        $meta->keywords = $request->input('keywords');
        $meta->description_en = $request->input('description_en');
        $meta->description = $request->input('description');
        $meta->titre_en = $request->input('titre_en');
        $meta->titre = $request->input('titre');
        $meta->langue = $request->input('langue');

        if ($meta->save()) {
            return redirect()->route('admin.Meta.edit', $meta->id)->with('success', 'Meta updated successfully.');
        } else {
            dd('save failed');
        }
    }
}
