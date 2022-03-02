<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model {

    protected $fillable = [
        'numero',
        'nombre'
    ];

    public function preguntas(){
        return $this->hasMany(Pregunta::class, 'foreign_key');
    }

    public function examens(){
        return $this->hasMany(Examen::class, 'foreign_key');
    }
}
