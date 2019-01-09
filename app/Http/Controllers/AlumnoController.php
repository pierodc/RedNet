<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Alumno;
use App\AlumnoXCurso;

class AlumnoController extends Controller
{
    //
    public function index() {
        //$Alumnos = DB::table('Alumno')->get();
        
        $AlumnoXCurso = AlumnoXCurso::all();
        
        return view('Alumno.index',[
            'AlumnoXCurso' => $AlumnoXCurso
        ]);
    }
    
}
