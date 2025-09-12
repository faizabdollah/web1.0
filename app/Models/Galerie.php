<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    use HasFactory;

    protected $table = 'galerie';

    protected $fillable = [
        'img',
        'ref',
        'affichage',
        'titre',
        'site_vitrine',
        'page',
        'mail',
    ];
}
