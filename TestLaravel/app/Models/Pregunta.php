<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {

    protected $fillable = [  
        'tema_id',
        'nivel',
        'enunciado',
        'respuesta1',
        'respuesta2',
        'respuesta3',
        'respuesta4',
        'correcta'
    ];

    public function temas(){
        return $this->belongsTo(Tema::class);
    }
}
