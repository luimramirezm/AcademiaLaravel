@extends('layouts.app') {{-- Le decimos q herede de app--}}

@section('titulo', 'Listado de Cursos')

@section('contenido')
<br>
<h3> Aqui encontrará el listado de cursos </h3>
    {{-- Con foreach hago el recorrido del array --}}
    <div class="row"> {{--El row debe sacarse del ciclo para poder q se vea en columnas --}}
    @foreach ($cursito as $alias )
       {{--<p>{{$alias}}</p>--}}  {{--las llaves son una interpolacion porq estamos mezclando php con html--}}
       {{--Con lo siguiente hacemos el card--}}
        <div class="col -sm"> {{--Aqui ponemos el tamaño q sacamos de botstrapt--}}
            <br>
            <div class="card text-center" style="width: 18rem; margin-top:20px">
                <img style="height: 150px; margin:20px" src="{{Storage::url($alias->imagen)}}" class="card-img-top mx-auto d-block" alt="imagen del curso"> {{-- usamos el botstrapt para organizar la imagen--}}
                <div class="card-body">
                    <h5 class="card-title">{{$alias -> nombre}}</h5>{{--Con esta interpolacion sacamos la info de la bd, el nombre es como se llama el campo de la bd--}}
                    <p class="card-text">{{$alias -> description}}</p>
                    <a href="#" class="btn btn-primary btn-dark">Inscribirse</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection

