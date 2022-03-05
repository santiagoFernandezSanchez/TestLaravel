<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen_user extends Model {

    protected $fillable = [
        'examen_id',
        'user_id',
        'preguntas_acertadas',
        'fecha_validacion',
        'preguntas_acertadas'
    ];

}
