<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produit';

    protected $fillable = [
        'ref',
        'ref_p',
        'categorie',
        'categorie_en',
        'nom_sous_categorie',
        'sous_categorie',
        'sous_categorie_en',
        'nom',
        'nom_en',
        'nom_l3',
        'nom_l4_222222',
        'nom_l4',
        'boutton',
        'description',
        'description_en',
        'description_l3',
        'description_l4_222222',
        'description_l4',
        'description_p',
        'description_p_en',
        'description_p_l3',
        'description_p_l4_22222222',
        'description_p_l4',
        'ven_loc',
        'prix',
        'prix_barre',
        'negociable',
        'date',
        'img',
        'img2',
        'img3',
        'img4',
        'img5',
        'img6',
        'img7',
        'img8',
        'img9',
        'img10',
        'video',
        'video_img',
        'raison_sociale',
        'a_class',
        'i_class',
        'site_vitrine',
        'top',
        'empl',
        'empl2',
        'mail',
        'page',
        'map',
        'keyword',
        'metatitre',
        'metadescription',
    ];

    public $timestamps = false;
}
