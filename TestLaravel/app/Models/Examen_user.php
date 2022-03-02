<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen_user extends Model
{
    protected $fillable = [
        'preguntas_acertadas'
    ];

    public function examenes(){
        return $this->hasMany(Examen::class, 'foreign_key');
    }

    public function Users(){
        return $this->hasMany(User::class, 'foreign_key');
    }
}
