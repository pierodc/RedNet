@extends('layouts.app')
@section('title','contact')

@section('content')

<h1>Cursos</h1>

<ul>

    @foreach ($Cursos as $Curso)
    	@if (count($Curso->AlumnoXCurso) > 0)
        <li>
            <a href="{{ action('AlumnoController@ListadoAlumno' , ['id' => $Curso->id] ) }}">
            {{ $Curso->NombreCompleto }} 
            </a>
        </li>
        @endif
    @endforeach
    
</ul>

@endsection


