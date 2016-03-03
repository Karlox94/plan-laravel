<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;

use Plan\Factor;
use Plan\Lineamiento;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factores = Factor::all();
        $lineamientos = Lineamiento::lists('descripcion','id');
        return view('admin.lineamiento.factor.index', compact('lineamientos','factores'));
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
        $factorExist = Factor::where('descripcion',$request->descripcion)->first();
        if($factorExist) {    
            return redirect('/factor')->with('message', 'error');
        } else {
            $factor = new Factor;
            $factor->descripcion = $request->descripcion;
            $factor->lineamiento_id = $request->lineamiento_id;
            $factor->save();
            return redirect('/factor')->with('message', 'ok');
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
        $factor = Factor::where('id', $id)->first();
        $factorLin = $factor->lineamiento->descripcion;
        $lineamientos = Lineamiento::where('descripcion','<>', $factorLin)->get();
        $alineamientos = array();
        foreach ($lineamientos as $key) {
            $alineamientos[$key->id] = $key->descripcion;
        }
        return view('admin.lineamiento.factor.editar', compact('factor', 'alineamientos'));
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
        $factor = Factor::find($id);
        $factor->fill($request->all());
        $factor->save();

        return redirect('/factor')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Factor::destroy($id);
        return redirect('/factor')->with('message','eliminado');
    }
}
