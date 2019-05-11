<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //referenciamos la relacion entre la tabla mascotas y vacunas;

    public function vacunas(){

    	return $this->hasMany(Vacuna::class);
    } 
}
