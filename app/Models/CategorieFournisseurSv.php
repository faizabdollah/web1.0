<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieFournisseurSv extends Model
{
    use HasFactory;

    protected $table = 'categorie_fournisseur_sv';

    protected $fillable = [
        'num_categorie',
        'nom_categorie_en',
        'nom_categorie_l3',
        'nom_categorie_l4',
        'nom_categorie',
        'categorie',
        'categorie_en222222',
        'page',
        'mail',
        'boutton',
        'img',
        'img2',
        'description',
        'description2',
        'top',
        'top2',
        'top3',
        'top4',
        'classes',
        'REF',
        'empl',
    ];
}
