<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'Alumno';
    
    public function AlumnoXCurso(){
        return $this->hasMany('App\AlumnoXCurso');
    }
    
}
