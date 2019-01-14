<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Alumno;
use App\AlumnoXCurso;
use App\Curso;

class AlumnoController extends Controller
{
    //
    public function index() { 
        // ORM
        $Cursos = Curso::all();
        
        return view('Alumno.index',[
            'Cursos' => $Cursos
        ]);
    }
    
	
	public function ListadoAlumno($id) { 
        // ORM
        //$AlumnoXCurso = AlumnoXCurso::all();
        $AlumnoXCurso = AlumnoXCurso::whereRaw('Curso_id = ?', [$id])->get();
        //$Curso = Curso::whereRaw('id = ?', [$id])->get();
        
		if (count($AlumnoXCurso) > 0){
			return view('Alumno.listado',[
				'Alumnos' => $AlumnoXCurso
			]);
			}
		else{
			return $this->index();
			}
				
    }
	
    public function ficha($id){
        $Alumno = DB::table('Alumno')->where('id','=',$id)->first();
        return view('Alumno.ficha',[
            'Alumno' => $Alumno
        ]);    
    }
    
}
