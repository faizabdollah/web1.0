<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    use HasFactory;

    protected $table = 'image_category';

    protected $fillable = [
        'img1', 'img2', 'img3', 'img4', 'img5',
    ];
}
