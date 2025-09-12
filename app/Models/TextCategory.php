<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextCategory extends Model
{
    use HasFactory;

    protected $table = 'text_category';

    protected $fillable = [
        'text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'text7', 'text8', 'text9', 'text10',
        'text11', 'text12', 'text13', 'text14', 'text15', 'text16', 'text17', 'text18', 'text19', 'text20',
        'text21', 'text22', 'text23', 'text24', 'text25', 'text26', 'text27', 'text28', 'text29', 'text30',
    ];
}
