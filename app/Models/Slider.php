<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // Specify the table name since it's not the default "sliders"
    protected $table = 'slider';

    // Specify which columns are mass assignable
    protected $fillable = [
        'nom', 'nom_en', 'nom_l3', 'nom_l4',
        'nom2', 'nom2_en', 'nom2_l3', 'nom2_l4',
        'p_descri', 'p_descri_en', 'p_descri_l3', 'p_descri_l4',
        'img',
        'Button', 'Button_en', 'Button_l3', 'Button_l4',
        'lien_desti',
        'mail',
        'page'
    ];

    // Disable timestamps if your table doesn't have created_at/updated_at
    public $timestamps = false;
}
