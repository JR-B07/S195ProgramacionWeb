<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'isbn',
        'titulo',
        'autor',
        'paginas',
        'anio',
        'editorial',
        'email_editorial'
    ];
}
