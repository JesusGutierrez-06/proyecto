<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table='estudiante';

    protected $fillable = [
        'tipo_sangre_id',
        'estado_civil_id',
        'provincia_id',
        'users_id',
        'genero_id',
        'matricula',
        'nombre',
        'apellidop',
        'apellidom',
        'fechanac',
        'telefono',
        'celular',
        'dni',
        'direccion',
        'estado',
        'fechaalta',
        'foto',
    ];
}
