<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\text_contact;

class TextContactController extends Controller
{
    public function edit($id)
    {
        $text_contact = text_contact::findOrFail($id);
        return view('admin.textcontact.edit', compact('text_contact'));
    }

    public function update(Request $request, $id)
    {
        $text_contact = text_contact::findOrFail($id);

        $rules = [];
        for ($i = 1; $i <= 30; $i++) {
            $rules["text{$i}"] = 'nullable|string';
        }
        $request->validate($rules);

        $text_contact->update($request->only(array_keys($rules)));

        return redirect()->route('admin.textcontacts.edit', $text_contact->id)
                         ->with('success', 'TextContact updated successfully.');
    }
}
