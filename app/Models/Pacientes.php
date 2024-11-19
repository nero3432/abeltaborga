<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    // Atributos permitidos para la asignación masiva
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'diagnostico',
        'area_derivada',
        'descripcion',
    ];

    // Deshabilitar timestamps si no existen en la tabla
    public $timestamps = false;
}
