<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;
use Plan\Http\Controllers\Controller;

use Plan\Facultad;
use Plan\Programa;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Facultad::all();
        return view('admin.facultad.index', compact('facultades'));
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
        $facultadExist = Facultad::where('nombre',$request->nombre)->first();
        if($facultadExist) {    
            return redirect('/facultad')->with('message', 'error');
        } else {
            $proceso = new Facultad;
            $proceso->nombre = $request->nombre;
            $proceso->save();
            return redirect('/facultad')->with('message', 'ok');
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
        $facultad = Facultad::find($id);
        return view('admin.facultad.editar', compact('facultad'));
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
        $facultad = Facultad::find($id);
        $facultad->fill($request->all());
        $facultad->save();

        return redirect('/facultad')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Facultad::destroy($id);
        return redirect('/facultad')->with('message','eliminado');
    }
}
