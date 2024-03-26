<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'estudiante';
    
    public $timestamps = false;

    protected $fillable = [
        'IDESTUDIANTE',
        'NOMBRE',
        'APELLIDOS',
        'TELEFONO_FIJO',
        'TELEFONO_PERSONAL',
        'CORREO_PERSONAL',
        'CORREO_INSTITUCIONAL',
        'DIRECCION',
        'DNI',
    ];
}