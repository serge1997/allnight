<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageEstablishment extends Model
{
    use HasFactory;

    protected $table = 'establishments_images';

    protected $fillable = [
        'establishment_id',
        'image'
    ];
}
