<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    // Specify the table name
    protected $table = 'fournisseur';

    // Specify which columns are mass assignable
    protected $fillable = [
        'nom', 'nom_en', 'nom_l3', 'nom_l4',
        'prenom',
        'description', 'description_en', 'description_l3', 'description_l4', 'description_ar',
        'description_p', 'description_p_en', 'description_p_l3', 'description_p_l4',
        'tel1', 'tel2', 'fax2222', 'gsm',
        'adresse', 'ville', 'raison_sociale', 'activite',
        'logo', 'logo_pied', 'mail', 'mail2', 'site_web',
        'face', 'instagram', 'twitter', 'whatsapp', 'pinterest', 'skype', 'youtube',
        'politique_retour', 'condition_utilisation', 'date_creation',
        'carte', 'img_boutique', 'img_sv', 'img_fr2222', 'offre_pub2222',
        'empl', 'affi2222', 'frais_transport', 'icommerce',
        'site_vitrine', 'page_vitrine', 'pv_sponsor',
        'page', 'tripadvisor'
    ];

    // Disable timestamps if the table doesn't have created_at/updated_at
    public $timestamps = false;
}
