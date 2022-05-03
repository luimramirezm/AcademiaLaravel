<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all(); //USamos un metodo all para traer toda la info de la tabla como array
        return view('docentes.index', compact('docentes'));//Contact apunta la info deseada a la vista para poderla usar en la lista
        //return $docentes;ASi probamos si sirve porq nos visualiza los datos de curso de labd
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //vamos a crear una instancia del modelo curso para manipular la tabla
          $docentes= new Docente(); //se debe crear la instancia  y la importacion en use
          $docentes->nombre = $request->input('nombre');// nombre es el campo de de la bd y el segundo nombre es el del campo q creamos /**hace una peticion al servidor para q almacene lo diligenciado en el formulario la flecha conecta el metodo all que trae toda la info almacenada en request, si le pongo input o name entonces me aparece el campo q le pido */
          $docentes->titleUniversity = $request->input('titleUniversity');
          $docentes->age = $request->input('age');

          if($request->hasFile('imagen')){ //aqui en imagen miramos el name del campo en el html
              $docentes->imagen = $request->file('imagen')->store('public/docentes'); //aqui usamos es el field de la bd llamada imagen- Esto permite guardar en public gracias al metodo store y crea la carpeta cursos q la acabamos de nombrar,

          }
          $docentes->save(); //para guardar la info en la bd
          return 'Docente guardado correctamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentes= Docente::find($id);
        return view('docentes.show', compact('docentes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentes = Docente::where('id',$id)->firstOrFail(); //Este es el controlador de excepciones para poder que capte el id
        //return $id;
        return view('docentes.edit', compact('docentes'));
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
        $docentes = Docente::find($id);
        //$cursito->fill($request->all()); //voy a rellenar curso con todo lo q hay en ese id

        $docentes->fill($request->except('imagen'));
        if($request->hasFile('imagen')){ //aqui en imagen miramos el name del campo en el html
            $docentes->imagen = $request->file('imagen')->store('public/docentes'); //aqui usamos es el field de la bd llamada imagen- Esto permite guardar en public gracias al metodo store y crea la carpeta cursos q la acabamos de nombrar,
        }
        $docentes->save();
        return 'Docente actualizado correctamente';
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
