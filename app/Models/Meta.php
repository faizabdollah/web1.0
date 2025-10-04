<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $table = 'meta_sv';

    public $timestamps = false;

    protected $fillable = [
        'langue', 'revisit', 'abstract', 'rating', 'author', 'robots', 'subject', 'language', 'keywords', 'description_en',
        'description', 'titre_en', 'titre'

    ];
}
