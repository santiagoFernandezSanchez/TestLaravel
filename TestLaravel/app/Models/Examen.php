<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model {
    
    protected $fillable = [
        'niveles',
        'numero_preguntas',
        'fecha_inicio',
        'fecha_final'
    ];

    public function users(){
        return $this->BelongsTooMany(User::class);
    }
}