<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estufa;

class EstufasApiReparacionesControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
       
        //Cada respuesta regresa 20 casas

        //solicito informacion
        $paginaActual = intval($request->input('pagina'));
        if(!$paginaActual)
        {
            $paginaActual = 1;
        }

        $numeroEstufas = Estufa::count();
        $numeroPaginas = ceil($numeroEstufas / 20);
        $estufas = Estufa::where('id_user',$request->user()->id)->skip(($paginaActual - 1) * 20)->take(20)->get();
    
        //Construyo respuesta
        $respuesta = array();
        $respuesta['total'] = $numeroEstufas;
        $respuesta['paginas'] = $numeroEstufas;
        $respuesta['pagina_actual'] = $paginaActual;
        $respuesta['estufas'] = $estufas;
        
        //Envió respuesta
        return $respuesta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estufa->tipo_tarea = $request->input('tipo_tarea');
        $estufa->encargado = $request->input('encargado');
        $estufa->descripcion = $request->input('descripcion');
        $estufa->estado = $request->input('estado');
        $estufa->material = $request->input('material');
        $estufa->fecha = $request->input('fecha');
        $estufa->ubicacion = $request->input('ubicacion');
        
        $estufa->id_user = $request->input('id_usuario');
        
        $estufa->pieza = $request->input('pieza');
        $estufa->precio_pieza = $request->input('precio_pieza');
        

        // Arma una respuesta
        $respuesta = array();
        $respuesta['exito'] = false;
        if($nuevaInstalacion -> save()){
            $respuesta['exito'] = true;
        }

        // Regresa una respuesta
        return $respuesta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstufasApiReparacionesController  $estufasApiReparacionesController
     * @return \Illuminate\Http\Response
     */
    public function show(EstufasApiReparacionesController $estufasApiReparacionesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstufasApiReparacionesController  $estufasApiReparacionesController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstufasApiReparacionesController $estufasApiReparacionesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstufasApiReparacionesController  $estufasApiReparacionesController
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstufasApiReparacionesController $estufasApiReparacionesController)
    {
        //
    }
}
