@extends('layouts.app') {{-- Le decimos q herede de app--}}
<br>
@section('titulo', 'Detalle curso')

@section('contenido')

<br>
<br>
<div class="text-center">
<h1>Detalle del Curso</h1>
<img style="height: 300px; width:400px; margin:20px" src="{{Storage::url($cursito->imagen)}}" class="card-img-top mx-auto d-block" alt="imagen del curso"> {{-- usamos el botstrapt para organizar la imagen--}}

<p class="card-text ">{{$cursito -> description}}</p> {{--Lo traemos del index--}}
<a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary btn-dark ">Editar</a>
</div>
