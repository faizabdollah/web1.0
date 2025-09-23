<?php

namespace App\Http\Controllers;

use App\Models\text_about;
use App\Models\image_about;
use App\Models\Galerie;
use App\Models\Reference;
use App\Models\ImgSv;
use App\Models\ImageCategory;
use App\Models\TextCategory;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the About page.
     */
    public function index()
    {
        $text_about     = text_about::first();
        $image_about    = image_about::first();
        $galerie        = Galerie::all();
        $reference      = Reference::all();

        return view('about', compact(
            'text_about',
            'image_about',
            'galerie',
            'reference'
        ));
    }
}
