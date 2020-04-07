<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas = App\Consulta::orderby('fechac','asc')->get();
        return view('consulta.index',compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = App\Paciente::orderby('nombre','asc')->get();
        $medicos = App\Medico::orderby('nombrem','asc')->get();
        return view('consulta.insert', compact('pacientes','medicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'fechac' => 'required',
            'idMedico' => 'required',
            'idPaciente' => 'required'
        ]);

        App\Consulta::create($request->all());

        return redirect()->route('consulta.index')
                        ->with('exito','Consulta creada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = App\Consulta::findorfail($id); 
        return view('consulta.view', compact('consulta',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = App\Consulta::findorfail($id);
        return view('consulta.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fechac' => 'required',
            'idMedico' => 'required'
        ]);

        $consulta = App\Consulta::findorfail($id);
        $consulta->update($request->all());

        return redirect()->route('consulta.index')
                         ->with('exito','Consulta modificada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta = App\Consulta::findorfail($id);

        $consulta->delete();

        return redirect()->route('consulta.index')
                         ->with('exito','Consulta eliminada correctamente!');
    }
}
