<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;
use Plan\Http\Controllers\Controller;
use Plan\Usuario;
use Plan\Rol;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $usuarios = Usuario::email($request->get('email'))->orderBy('nombre', 'asc')->paginate(10);
        $roles = Rol::lists('nombre','id');
        $cantidad = count($usuarios);
        if ($cantidad == 0) {
            $usuarios = Usuario::orderBy('nombre', 'asc')->paginate(10);
            return view('admin.usuario.index', compact('usuarios','roles','cantidad'));
        } else {
            return view('admin.usuario.index', compact('usuarios','roles','cantidad'));
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userExist = Usuario::where('email',$request->email)->first();
        if($userExist) {    
            return redirect('/usuario')->with('message', 'error');
        } else {
            $usuario = new Usuario;
            $usuario->nombre = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->email = $request->email;
            $usuario->dependencia = $request->dependencia;
            $usuario->cargo = $request->cargo;            
            $usuario->save();

            $lastUser = Usuario::where('email',$request->email)->first();
            $idUser = Usuario::find($lastUser->id);
            $idUser->rols()->attach($request->rol_id);

            return redirect('/usuario')->with('message', 'ok');
        } 
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
        $usuario = Usuario::where('id', $id)->first();
        $rol = $usuario->rols->first()->nombre;
        $roles = Rol::where('nombre','<>', $rol)->get();
        $aroles = array();
        foreach ($roles as $key) {
            $aroles[$key->id] = $key->nombre;
        }
        return view('admin.usuario.editar', compact('usuario', 'aroles'));
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
        $usuario = usuario::find($id);
        $usuario->fill($request->all());
    
        $usuario->save();

        return redirect('/usuario')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('/usuario')->with('message','eliminado');
    }
}
