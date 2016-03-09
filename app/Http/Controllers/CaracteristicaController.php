<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;
use Plan\Http\Controllers\Controller;

use Plan\Factor;
use Plan\Caracteristica;

class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicas = Caracteristica::paginate(10);
        $factores = Factor::lists('descripcion','id');
        return view('admin.lineamiento.caracteristica.index', compact('caracteristicas','factores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caracteristica.addCaracteristica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carExist = Caracteristica::where('descripcion',$request->descripcion)->first();
        if($carExist) {    
            return redirect('/caracteristica')->with('message', 'error');
        } else {
            $caracteristica = new Caracteristica;
            $caracteristica->descripcion = $request->descripcion;
            $caracteristica->factor_id = $request->factor_id;
            $caracteristica->save();
            return redirect('/caracteristica')->with('message', 'ok');
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
        $caracteristica = Caracteristica::where('id', $id)->first();
        $carFactor = $caracteristica->factor->descripcion;
        $factores = Factor::where('descripcion','<>', $carFactor)->get();
        $afactores = array();
        foreach ($factores as $key) {
            $afactores[$key->id] = $key->descripcion;
        }
        return view('admin.lineamiento.caracteristica.editar', compact('caracteristica', 'afactores'));
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
        $caracteristica = Caracteristica::find($id);
        $caracteristica->fill($request->all());
        $caracteristica->save();

        return redirect('/caracteristica')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Caracteristica::destroy($id);
        return redirect('/caracteristica')->with('message','eliminado');
    }
}
