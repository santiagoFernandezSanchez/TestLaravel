<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model {

    protected $fillable = [
        'nombre'
    ];

    public function materias(){
        return $this->hasMany(Materia::class, 'foreign_key');
    }
}
