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
        $cursito = Curso::all(); //USamos un metodo all para traer toda la info de la tabla como array
        return view('cursos.index', compact('cursito'));//Contact apunta la info deseada a la vista para poderla usar en la lista
        //return $cursito;ASi probamos si sirve porq nos visualiza los datos de curso de labd
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

        if($request->hasFile('imagen')){ //aqui en imagen miramos el name del campo en el html
            $cursito->imagen = $request->file('imagen')->store('public/cursos'); //aqui usamos es el field de la bd llamada imagen- Esto permite guardar en public gracias al metodo store y crea la carpeta cursos q la acabamos de nombrar,

        }
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
        $cursito= Curso::find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = Curso::where('id',$id)->firstOrFail(); //Este es el controlador de excepciones para poder que capte el id
        //return $id;
        return view('cursos.edit', compact('cursito'));
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
        //rellenar los campos con la info en la peeticion request
        //esta técnica solo actualiza los textps y número
        $cursito = Curso::find($id);
        //$cursito->fill($request->all()); //voy a rellenar curso con todo lo q hay en ese id

        $cursito->fill($request->except('imagen'));
        if($request->hasFile('imagen')){ //aqui en imagen miramos el name del campo en el html
            $cursito->imagen = $request->file('imagen')->store('public/cursos'); //aqui usamos es el field de la bd llamada imagen- Esto permite guardar en public gracias al metodo store y crea la carpeta cursos q la acabamos de nombrar,
        }
        $cursito->save();
        return 'Curso actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursito = Curso::find($id); //Permite ver los botones de editar y eliminar

        $urlImagenBD = $cursito->imagen; //Permite obtener la ruta relativa y almacenarla en la variable $urlImagenBD
        //return $urlImagenBD; //nos muestra la ruta de la imagen cuando damos en eliminar
        //return $cursito;
        //$rutaCompleta = public_path().$urlImagenBD;
        //return $rutaCompleta;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD); //estamos reemplzadando la palabra public/ por storage
        //return $nombreImagen; //La comentamos proque ya no la necesitamos
        $rutaCompleta = public_path().$nombreImagen; //EL public_path concatenado con la ruta relativa nos trae la ruta absoluta
        //return $rutaCompleta;
        unlink($rutaCompleta); //unlink borra el contenido de la ruta que esta entre parentesis
        $cursito ->delete(); //El m{etodo delete que es llamado mediante el objeto $cursito
        return 'Registro eliminado correctamente'; //AL eliminar este será el mensaje que recibirá 
    }


}
