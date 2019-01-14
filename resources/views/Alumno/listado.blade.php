@extends('layouts.app')
@section('title','contact')

@section('content')

<h1>Alumnos</h1>
<h1>{{ $Alumnos[0]->Curso->NombreCompleto }}</h1>

<ul>
    @foreach ($Alumnos as $Al)
        <li>
            <a href="{{ action('AlumnoController@ficha' , ['id' => $Al->id] ) }}">
            {{ $Al->Alumno->Apellido1 }}, {{ $Al->Alumno->Nombre1 }}
            </a>
        </li>
    @endforeach
</ul>

@endsection


