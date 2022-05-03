@extends('layouts.app') {{-- Le decimos q herede de app--}}
<br>
@section('titulo', 'Detalle Docente')

@section('contenido')

<br>
<br>
<div class="text-center">
<h1>Detalle Docente</h1>
<img style="height: 300px; width:400px; margin:20px" src="{{Storage::url($docentes->imagen)}}" class="card-img-top mx-auto d-block" alt="imagen del docente"> {{-- usamos el botstrapt para organizar la imagen--}}

<p class="card-text ">{{$docentes -> titleUniversity}}</p> {{--Lo traemos del index--}}
<a href="/docentes/{{$docentes->id}}/edit" class="btn btn-primary btn-dark ">Editar</a>
</div>
