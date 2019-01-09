<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoXCurso extends Model
{
    protected $table = 'AlumnoXCurso';
    
    // uno a uno
    public function Alumno(){
        return $this->belongsTo('App\Alumno','Alumno_id');
    }
    
    // uno a uno
    public function Curso(){
        return $this->belongsTo('App\Curso','Curso_id');
    }
    
}
