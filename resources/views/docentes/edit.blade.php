
{{-- En blade heredamos con @extends --}}
@extends('layouts.app') {{-- Estoy llamando la plantilla de layouts app.blade.php --}}

@section('titulo', 'Editar Docente') {{-- Esto es para personalizar esa seccion--}}

@section('contenido')
    <h3 class="text-center"> Editar Docente </h3> {{-- este formulario lo heredamos de abajo--}}
        <form action="/docentes/{{$docentes->id}}" method="POST" enctype='multipart/form-data'> {{-- en action debemos invocar la ruta hacia donde abre cuando le damos click al botonel metodo post siempre va para los formulario y el enctype se usa para enviar archivos como fotos --}}
            @method('PUT') {{-- Como en method del from no podemos usar la opcion put porque da error, se debe poner post  y usar esta propiedad--}}
            @csrf{{--Este es el token de botstrapt- la proteccion contra taques --}}
            <div class="form-group">
                <label for="nombre">Modifique el nombre del docente: </label>
                <input id="nombre" class="form-control" type="text" name="nombre" value="{{$docentes->nombre}}">
            </div>
            <div class="form-group">
                <label for="titleUniversity">Modifique el título: </label>
                <input id="titleUniversity" class="form-control" type="text" name="titleUniversity" value="{{$docentes->titleUniversity}}">
            </div>
            <div class="form-group">
                <label for="age">Modifique la edad: </label>
                <input id="age" class="form-control" type="number" name="age" value="{{$docentes->age}}">
            </div>
            <div class="form-group">
                <label for="imagen">Cargar nueva imagen </label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <button class="btn btn-dark" type="subtmit">Actualizar</button>  <!-- (el type debe ser subtmit para que cree) · -->
        </form>
@endsection {{--  debo cerrar el section --}}
