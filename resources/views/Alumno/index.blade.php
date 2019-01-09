<h1>Alumnos</h1>

<ul>
    @foreach ($AlumnoXCurso as $Al)
        <li>{{ $Al->Alumno->Nombre1 }}</li>
    @endforeach
</ul>