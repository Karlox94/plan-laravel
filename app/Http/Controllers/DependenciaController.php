<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;

use Plan\Dependencia;
use Plan\Proceso;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependencia::paginate(10);
        $procesos2 = Proceso::lists('nombre','id');
                
        return view('admin.proceso.dependencia.index', compact('procesos2','dependencias'));
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
        $dependenciaExist = Dependencia::where('nombre',$request->nombre)->first();
        if($dependenciaExist) {    
            return redirect('/dependencia')->with('message', 'error');
        } else {
            $dependencia = new Dependencia;
            $dependencia->nombre = $request->nombre;
            $dependencia->proceso_id = $request->proceso;
            $dependencia->save();
            return redirect('/dependencia')->with('message', 'ok');
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
        $dependencia = Dependencia::where('id', $id)->first();
        $procesodependencia = $dependencia->proceso->nombre;
        $procesos = Proceso::where('nombre','<>', $procesodependencia)->get();
        $aprocesos = array();
        foreach ($procesos as $key) {
            $aprocesos[$key->id] = $key->nombre;
        }
        return view('admin.proceso.dependencia.editar', compact('dependencia', 'aprocesos'));
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
        $dependencia = Dependencia::find($id);
        $dependencia->fill($request->all());
        $dependencia->save();

        return redirect('/dependencia')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dependencia::destroy($id);
        return redirect('/dependencia')->with('message','eliminado');
    }
}
