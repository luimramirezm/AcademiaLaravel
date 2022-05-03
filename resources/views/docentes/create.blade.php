{{-- En blade heredamos con @extends --}}
@extends('layouts.app') {{-- Estoy llamando la plantilla de layouts app.blade.php --}}

@section('titulo', 'Ingresar Docente') {{-- Esto es para personalizar esa seccion--}}

@section('contenido')
    <h3 class="text-center"> Ingresar Docente </h3> {{-- este formulario lo heredamos de abajo--}}
        <form action="/docentes" method="POST" enctype='multipart/form-data'> {{-- en action debemos invocar la ruta hacia donde abre cuando le damos click al botonel metodo post siempre va para los formulario y el enctype se usa para enviar archivos como fotos --}}
            @csrf{{--Este es el token de botstrapt- la proteccion contra taques --}}
            <div class="form-group">
                <label for="nombre">Ingrese nombre del docente: </label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="titleUniversity">Ingrese el título universitario: </label>
                <input id="titleUniversity" class="form-control" type="text" name="titleUniversity">
            </div>
            <div class="form-group">
                <label for="age">Ingrese la edad: </label>
                <input id="age" class="form-control" type="number" name="age">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue la foto de perfil: </label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <button class="btn btn-dark" type="subtmit">Crear</button>  <!-- (el type debe ser subtmit para que cree) · -->
        </form>
@endsection
