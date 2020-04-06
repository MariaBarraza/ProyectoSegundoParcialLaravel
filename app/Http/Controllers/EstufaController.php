<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estufa;

class EstufaController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }

    public function index(){

        $estufa = Estufa::all(); 

        $argumentos = array();
        $argumentos['estufas'] = $estufa;

        return view('estufas.index', $argumentos); //Se ira a la carpete resources, a la carpeta view. El view solo te va a leer los archivos .blade.php

    }

    public function show($id){


        //Busca un registro a partir de la llave primaria
        //SELECT * FROM noticias WHERE id = 4
        $estufa = Estufa::find($id);

        $argumentos = array();
        $argumentos['estufas'] = $noticia;
        
        return view('estufas.show', $argumentos);

    }

}
