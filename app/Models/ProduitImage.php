<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitImage extends Model
{
    use HasFactory;

    protected $table = 'produit_image';

    protected $fillable = [
        'produit_id',
        'img',
    ];
}
