<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuadro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'dimensiones',
        'tecnica',
        'descripcion',
        'imagen',
        'precio',
        'en_venta'
    ];
}
