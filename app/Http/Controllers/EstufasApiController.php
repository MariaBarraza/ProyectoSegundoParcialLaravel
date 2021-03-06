<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Estufa;

class EstufasApiController extends Controller
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

        $estufas = Estufa::where([
            ['id_user','=',$request->user()->id],
            ['tipo_tarea','=','Instalacion']
            ])->skip(($paginaActual - 1) * 20)->take(20)->get();


    
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
        $estufa = new Estufa();
        $estufa->tipo_tarea = 'Instalacion';
        $estufa->encargado = $request->input('encargado');
        $estufa->descripcion = $request->input('descripcion');
        $estufa->estado = $request->input('estado');
        $estufa->fecha = $request->input('fecha');
        $estufa->ubicacion = $request->input('ubicacion');
        
        $estufa->id_user = $request->input('id_usuario');
        
        if ($request->hasFile('imgPortada')) {

            $archivoPortada = $request->file('imgPortada');
            $rutaArchivo = $archivoPortada->store('public/portadas');
            $rutaArchivo = substr($rutaArchivo, 16);
            $estufa->foto_resultado = $rutaArchivo;

        }
        $estufa->precio_estufa = $request->input('precio_estufa');
        $estufa->modelo_estufa = $request->input('modelo_estufa');

            // Arma una respuesta
            $respuesta = array();
            $respuesta['exito'] = false;
            if($estufa -> save()){
                $respuesta['exito'] = true;
            }

            // Regresa una respuesta
            return $respuesta;
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

            $respuesta = array();
            $respuesta['estufa'] = $estufa;
        }else
        $respuesta['estufa']= "no se encontro la tarea";
        return $respuesta;
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

        $estufa->encargado = $request->input('encargado');
        $estufa->descripcion = $request->input('descripcion');
        $estufa->estado = $request->input('estado');
        $estufa->fecha = $request->input('fecha');
        $estufa->ubicacion = $request->input('ubicacion');
        
        if ($request->hasFile('imgPortada')) {

            $archivoPortada = $request->file('imgPortada');
            $rutaArchivo = $archivoPortada->store('public/portadas');
            $rutaArchivo = substr($rutaArchivo, 16);
            $estufa->foto_resultado = $rutaArchivo;

        }

        
        $estufa->modelo_estufa = $request->input('modelo_estufa');
        $estufa->precio_estufa = $request->input('precio_estufa');


            if($estufa->save()){

                $respuesta = array();
               return $respuesta['estufa'] = $estufa;
                
            }
            
            $respuesta = array();
          return  $respuesta['estufa'] = "no se pudo guardar la tarea";
            
        }
        $respuesta = array();
       return  $respuesta['estufa'] = "no se pudo guardar la tarea";
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
     /**
     * Display a list of items depending on the search criteria.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // Search terms
        $filter = $request -> input('filtro');
        $search = $request -> input('fecha');

        // Retrieval of the data according to the search terms
        if($filter == "pendientes" || $filter == "Pendientes" || $filter == "pendiente" || $filter == "Pendiente")
        {
            $estufas = Estufa::where([
                ['id_user','=', $request->user()->id],
                ['estado','=', 'Pendiente'],
                ['fecha', 'LIKE',  '%' . $search . '%'],
                ['tipo_tarea','=','Instalacion']
                ])->get();
        }
        else if($filter == "terminadas" || $filter == "Terminadas" || $filter == "terminado" || $filter == "Terminado")
        {
            $estufas = Estufa::where([
                ['id_user','=', $request->user()->id],
                ['estado','=', 'Terminado'],
                ['fecha', 'LIKE',  '%' . $search . '%'],
                ['tipo_tarea','=','Instalacion']
                ])->get();
        } else 
        {
            return "No se encontró ningun registro";
        }

        
        // Construyo respuesta
        $respuesta = array();
        $respuesta['estufas'] = $estufas;

        // Envió respuesta
        return $respuesta;
    }
}
