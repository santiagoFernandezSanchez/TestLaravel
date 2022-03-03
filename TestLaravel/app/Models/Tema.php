<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model {

    protected $fillable = [
        'numero',
        'nombre',
        'materia_id'
    ];

    public function preguntas(){
        return $this->hasMany(Pregunta::class);
    }

    public function examens(){
        return $this->hasMany(Examen::class);
    }

    public function materias(){
        return $this->belongsTo(Materia::class);
    }
}
