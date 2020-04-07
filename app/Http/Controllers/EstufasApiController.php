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
        //
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
