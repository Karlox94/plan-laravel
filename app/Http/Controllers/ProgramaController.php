<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;

use Plan\Programa;
use Plan\Usuario;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::paginate(10); 
        $usuarios = Usuario::lists('nombre','id');
        return view('admin.facultad.programa.index', compact('programas','usuarios'));
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
        $programaExist = Programa::where('nombre',$request->nombre)->first();
        if($programaExist) {    
            return redirect('/programa')->with('message', 'error');
        } else {
            $programa = new Programa;
            $programa->nombre = $request->nombre;
            $programa->lider_id = $request->lider_id;
            $programa->auditor_id = $request->auditor_id;
            $programa->save();
            return redirect('/programa')->with('message', 'ok');
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
        $programa = Programa::where('id', $id)->first();
        $lider = $programa->lider->id;
        $auditor = $programa->auditor->id;
        $lideres = Usuario::where('id','<>', $id)->get();
        $auditores = Usuario::where('id','<>', $id)->get();
        $vlideres = array();
        $vauditores = array();
        foreach ($lideres as $key) {
            $vlideres[$key->id] = $key->nombre;
        }
        foreach ($auditores as $key) {
            $vauditores[$key->id] = $key->nombre;
        }
        return view('admin.facultad.programa.editar', compact('programa','vlideres','vauditores'));
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
        $programa = Programa::find($id);
        $programa->fill($request->all());
        $programa->save();

        return redirect('/programa')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Programa::destroy($id);
        return redirect('/programa')->with('message','eliminado');
    }
}
