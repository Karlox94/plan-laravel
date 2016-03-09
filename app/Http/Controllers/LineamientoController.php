<?php

namespace Plan\Http\Controllers;

use Illuminate\Http\Request;

use Plan\Http\Requests;
use Plan\Http\Controllers\Controller;

use Plan\Lineamiento;

class LineamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineamientos = Lineamiento::paginate(10);
        return view('admin.lineamiento.index', compact('lineamientos'));
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
        $linlExist = Lineamiento::where('descripcion',$request->descripcion)->first();
        if($linlExist) {    
            return redirect('/lineamiento')->with('message', 'error');
        } else {
            $lineamiento = new lineamiento;
            $lineamiento->descripcion = $request->descripcion;
            $lineamiento->save();
            return redirect('/lineamiento')->with('message', 'ok');
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
        $lineamiento = Lineamiento::find($id);
        return view('admin.lineamiento.editar', compact('lineamiento'));
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
        $lineamiento = Lineamiento::find($id);
        $lineamiento->fill($request->all());
        $lineamiento->save();

        return redirect('/lineamiento')->with('message','editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lineamiento::destroy($id);
        return redirect('/lineamiento')->with('message','eliminado');
    }
}
