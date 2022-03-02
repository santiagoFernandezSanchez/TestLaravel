<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model {

    protected $fillable = [
        'nombre'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function temas(){
        return $this->hasMany(Tema::class);
    }

    public function nivels(){
        return $this->belongsTo(Nivel::class);
    }
    
}
