
{{-- En blade heredamos con @extends --}}
@extends('layouts.app') {{-- Estoy llamando la plantilla de layouts app.blade.php --}}

@section('titulo', 'Crear Curso') {{-- Esto es para personalizar esa seccion--}}

@section('contenido')
    <h3 class="text-center"> Creación del nuevo curso </h3> {{-- este formulario lo heredamos de abajo--}}
        <form action="/cursos" method="POST" enctype='multipart/form-data'> {{-- en action debemos invocar la ruta hacia donde abre cuando le damos click al botonel metodo post siempre va para los formulario y el enctype se usa para enviar archivos como fotos --}}
            @csrf{{--Este es el token de botstrapt- la proteccion contra taques --}}
            <div class="form-group">
                <label for="nombre">Ingrese nombre del curso: </label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descript">Ingrese una descriptción: </label>
                <input id="descript" class="form-control" type="text" name="descripcion">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue una imagen para el curso: </label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <button class="btn btn-dark" type="subtmit">Crear</button>  <!-- (el type debe ser subtmit para que cree) · -->
        </form>
@endsection {{--  debo cerrar el section --}}
{{-- Esto era antes de heredar la plantilla  app.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario para crear</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<body>
    <div class="container">
        <br>
        <h3 class="text-center"> Creación del nuevo curso </h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nombre">Ingrese nombre del curso: </label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descript">Ingrese una descriptción: </label>
                <input id="descript" class="form-control" type="text" name="descripcion">
            </div>
            <button class="btn btn-dark" type="subtmit">Crear</button>  <!-- (el type debe ser subtmit para que cree) · -->
        </form>
    </div>
</body>
</html>
--}}
