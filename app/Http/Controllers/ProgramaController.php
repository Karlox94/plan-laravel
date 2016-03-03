<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;

use Plan\Facultad;
use Plan\Programa;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::all();
        $facultades2 = Facultad::lists('nombre','id');
        return view('admin.facultad.programa.index', compact('facultades2','programas'));
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
            $programa->facultad_id = $request->facultad;
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
        $facultadprograma = $programa->facultad->nombre;
        $facultades = Facultad::where('nombre','<>', $facultadprograma)->get();
        $afacultades = array();
        foreach ($facultades as $key) {
            $afacultades[$key->id] = $key->nombre;
        }
        return view('admin.facultad.programa.editar', compact('programa', 'afacultades'));
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
