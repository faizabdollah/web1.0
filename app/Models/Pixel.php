<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pixel extends Model
{
    use HasFactory;

    protected $table = 'pixel';

    public $timestamps = false;

    protected $fillable = [
        'pixel1',
        'pixel2',
        'pixel3',
        'pixel4',
        'pixel5',
    ];
}
