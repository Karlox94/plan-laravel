<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;
use Plan\Http\Controllers\Controller;

use Plan\Proceso;
use Plan\Usuario;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = Proceso::paginate(10);  
        $usuarios = Usuario::lists('nombre','id');
        return view('admin.proceso.index', compact('procesos','usuarios'));
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
        $procesoExist = Proceso::where('nombre',$request->nombre)->first();
        if($procesoExist) {    
            return redirect('/proceso')->with('message', 'error');
        } else {
            $proceso = new Proceso;
            $proceso->nombre = $request->nombre;
            $proceso->lider_id = $request->lider_id;
            $proceso->auditor_id = $request->auditor_id;
            $proceso->save();
            return redirect('/proceso')->with('message', 'ok');
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
        $proceso = Proceso::where('id', $id)->first();
        $lider = $proceso->lider->id;
        $auditor = $proceso->auditor->id;
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
        return view('admin.proceso.editar', compact('proceso','vlideres','vauditores'));
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
        $proceso = Proceso::find($id);
        $proceso->fill($request->all());
        $proceso->save();

        return redirect('/proceso')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proceso::destroy($id);
        return redirect('/proceso')->with('message','eliminado');
    }
}
