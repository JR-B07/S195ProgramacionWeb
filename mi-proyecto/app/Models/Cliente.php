<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Opcional si la tabla sigue convención de nombres

    // Especificar los campos que pueden llenarse masivamente
    protected $fillable = ['nombre', 'apellido', 'correo', 'telefono'];
}
