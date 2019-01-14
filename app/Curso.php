<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'Curso';
    
    // uno a muchos
    public function AlumnoXCurso(){
        return $this->hasMany('App\AlumnoXCurso');
    }
 
}
