<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // Instrucción para dar permisos a los campos que se desean hacer una inserción múltiple.
    protected $fillable = [
        "title",
        "zelda"
    ];
}
