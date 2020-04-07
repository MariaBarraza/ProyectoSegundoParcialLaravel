<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Estufa;

class EstufasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {

        $this->middleware('auth');

    }
    public function index()
    {
        $estufa = Estufa::all(); 

        $argumentos = array();
        $argumentos['estufas'] = $estufa;

        return view('admin.estufas.index', $argumentos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estufas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estufa = new Estufa();
        
        $estufa->tipo_tarea = $request->input('tipo_tarea');
        $estufa->encargado = $request->input('encargado');
        $estufa->descripcion = $request->input('descripcion');
        $estufa->estado = $request->input('estado');
        $estufa->material = $request->input('material');
        $estufa->fecha = $request->input('fecha');
        $estufa->ubicacion = $request->input('ubicacion');
        $estufa->id_user = $request->user()->id;


        if ($request->hasFile('imgPortada')) {

            $archivoPortada = $request->file('imgPortada');
            $rutaArchivo = $archivoPortada->store('public/portadas');
            $rutaArchivo = substr($rutaArchivo, 16);
            $estufa->foto_resultado = $rutaArchivo;

        }
        

        if ($estufa->save()) {

            return redirect()->route('estufas.index')->with('exito', '¡La tarea ha sido guardada con éxito!');
        }

        //Aqui no se pudo guardar
        return redirect()->route('estufas.index')->with('error', 'No se pudo agregar la tarea');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estufa = Estufa::find($id);
        if($estufa){

            $argumentos = array();
            $argumentos['estufa'] = $estufa;
            return view('admin.estufas.show', $argumentos);

        }
        return redirect()->route('admin.estufas.index')->with('error', 'No se encontró la tarea');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estufa = Estufa::find($id);
        //Si encontro la noticia redirigete al edit
        if($estufa){

            $argumentos = array();
            $argumentos['estufa'] = $estufa;
            return view('admin.estufas.edit', $argumentos);

        }
        return redirect()->route('admin.estufas.index')->with('error', 'No se encontró la noticia');
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
        $estufa = Estufa::find($id);
        if($estufa){

            $estufa->tipo_tarea = $request->input('tipo_tarea');
        $estufa->encargado = $request->input('encargado');
        $estufa->descripcion = $request->input('descripcion');
        $estufa->estado = $request->input('estado');
        $estufa->material = $request->input('material');
        $estufa->fecha = $request->input('fecha');
        $estufa->ubicacion = $request->input('ubicacion');
        $estufa->id_user = $request->user()->id;

            if ($request->hasFile('imgPortada')) {

                $archivoPortada = $request->file('imgPortada');
                $rutaArchivo = $archivoPortada->store('public/portadas');
                $rutaArchivo = substr($rutaArchivo, 16);
                $estufa->foto_resultado = $rutaArchivo;
    
            }

            if($estufa->save()){

                return redirect()->route('estufas.edit',$id)->with('exito','¡La tarea se ACTUALIZÓ exitosamente!');
                
            }
            
            return redirect()->route('estufas.edit',$id)->with('error','La tarea NO se pudo actualizar');
            
        }

        return redirect()->route('estufas.index')->with('error','No se encontró la tarea');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estufa = Estufa::find($id);
        if($estufa){

            if($estufa->delete()){

                return redirect()->route('estufas.index')->with('exito', '¡Tarea eliminada exitosamente!');

            }

            return redirect()->route('estufas.index')->with('error', 'No se puedo eliminar la tarea');

        }

        return redirect()->route('estufas.index')->with('error', 'No se encontró la tarea');
    }
}
