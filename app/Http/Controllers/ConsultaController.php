<?php

namespace App\Http\Controllers;
use App\User;
use App\Rol;
use Gate;
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
        if (Gate::denies('crear-consulta'))
        {
            return redirect()->route('consulta.index');
        }    
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
        $consulta = App\Consulta::join('pacientes', 'consultas.idPaciente', 'pacientes.id')
        ->join('medicos', 'consultas.idMedico', 'medicos.id')
        ->select('consultas.*', 'pacientes.nombre as pacientes', 'medicos.nombrem as medico')
                            ->where('consultas.id', $id)
                            ->first();
        return view('consulta.view', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('editar-consulta'))
        {
            return redirect()->route('consulta.index');
        }    
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
        if (Gate::denies('eliminar-consulta'))
        {
            return redirect()->route('consulta.index');
        }    
        $consulta = App\Consulta::findorfail($id);

        $consulta->delete();

        return redirect()->route('consulta.index')
                         ->with('exito','Consulta eliminada correctamente!');
    }
}
