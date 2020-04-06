<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Usuario;

class UsuarioController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all(); 

        $argumentos = array();
        $argumentos['usuarios'] = $usuario;

        return view('admin.usuarios.index', $argumentos); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verificacion = Usuario::where('email', $request->input('email'))->first();
        if($verificacion)
        {
            return redirect()->route('usuarios.create')->with('error', 'El Usuario ' . $request->input('email') . ' ya existe');
        }

        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->tipo = $request->input('tipo');
        $usuario->password = bcrypt($request->input('password'));

        if ($usuario->save()) {

            return redirect()->route('usuarios.index')->with('exito', '¡El usuario ha sido guardada con éxito!');
            

        }
        return redirect()->route('usuarios.index')->with('error', 'No se pudo agregar el usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if($usuario){

            $argumentos = array();
            $argumentos['usuario'] = $usuario;
            return view('admin.usuarios.show', $argumentos);

        }
        return redirect()->route('admin.usuario.index')->with('error', 'No se encontró la tarea');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $usuario = Usuario::find($id);
        if($usuario){

            $argumentos = array();
            $argumentos['usuario'] = $usuario;
            return view('admin.usuarios.edit', $argumentos);

        }
        return redirect()->route('usuarios.index')->with('error', 'No se encontró el usuario');
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
        $editar = true;
        $usuario = Usuario::find($id);
        if($usuario){

            $usuario->name = $request->input('name');
            $usuario->email = $request->input('email');
            $usuario->tipo = $request->input('tipo');
            if($usuario->password != $request->input('password'))
            {
                $usuario->password = bcrypt($request->input('password'));
            }
            if($usuario->save()){

                return redirect()->route('usuarios.edit',$id)->with('exito','¡El Usuario se actualizó exitosamente!');
                
            }
            
            return redirect()->route('usuarios.edit',$id)->with('error','El Usuario no se pudo actualizar');
            
        }

        return redirect()->route('usuarios.index')->with('error','No se encontró el usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if($usuario){

            if($usuario->delete()){

                return redirect()->route('usuarios.index')->with('exito', '¡Usuario eliminada exitosamente!');

            }

            return redirect()->route('usuarios.index')->with('error', 'No se puede eliminar el usuario');

        }

        return redirect()->route('usuarios.index')->with('error', 'No se encontró el usuario');
    }
}
