<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgSv extends Model
{
    use HasFactory;

    protected $table = 'img_sv';

    protected $fillable = [
        'about1',
        'about2',
        'produit',
        'det_produit',
        'contact1',
        'mail',
        'page',
    ];
}
