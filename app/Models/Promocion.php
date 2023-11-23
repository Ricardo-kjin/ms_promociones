<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promociones';
    protected $fillable = [
        'nombre_promocion',
        'fecha_ini',
        'fecha_fin',
        'descuento',
        'descripcion',
    ];
}
