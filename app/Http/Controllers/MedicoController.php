<?php

namespace App\Http\Controllers;
use App\User;
use App\Rol;
use Gate;
use App;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = App\Medico::orderby('cedulam','asc')->get();
        return view('medico.index',compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('registrar-medico'))
        {
            return redirect()->route('medico.index');
        } 
        $hospitals = App\Hospital::orderby('nombre','asc')->get();
        return view('medico.insert',compact('hospitals'));
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
            
            'cedulam' => 'required',
            'nombrem' => 'required',
            'especialidad' => 'required',
            'idhospital' => 'required'
        ]);
            App\Medico::create($request->all());

        return redirect()->route('medico.index')
                        ->with('exito','Medico registrado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = App\Medico::findorfail($id);
        return view('medico.view', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('editar-medico'))
        {
            return redirect()->route('medico.index');
        } 
        $hospitals = App\Hospital::orderby('nombre','asc')->get();
        $medico = App\Medico::findorfail($id);
        return view('medico.edit', compact('medico','hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cedulam' => 'required',
            'nombrem' => 'required',
            'especialidad' => 'required',
            'idhospital' => 'required'
        ]);

        $medico = App\Medico::findorfail($id);
        $medico->update($request->all());

        return redirect()->route('medico.index')
                         ->with('exito','Medico modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('eliminar-medico'))
        {
            return redirect()->route('medico.index');
        } 
        $medico = App\Medico::findorfail($id);

        $medico->delete();

        return redirect()->route('medico.index')
                         ->with('exito','Medico eliminado correctamente!');
    }
}
