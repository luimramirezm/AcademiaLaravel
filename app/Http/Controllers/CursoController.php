<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Estoy en un controlador de recursos';
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Almacena un nuevo registro creado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //vamos a crear una instancia del modelo curso para manipular la tabla
        $cursito= new Curso(); //se debe crear la instancia  y la importacion en use
        $cursito->nombre = $request->input('nombre');// nombre es el campo de de la bd y el segundo nombre es el del campo q creamos /**hace una peticion al servidor para q almacene lo diligenciado en el formulario la flecha conecta el metodo all que trae toda la info almacenada en request, si le pongo input o name entonces me aparece el campo q le pido */
        $cursito->description = $request->input('descripcion');
        $cursito->save(); //para guardar la info en la bd
        return 'Curso creado exitosamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
