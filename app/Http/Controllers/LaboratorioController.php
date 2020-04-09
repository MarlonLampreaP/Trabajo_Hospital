<?php

namespace App\Http\Controllers;
use Gate;
use App\Rol;
use App\Users;
use App;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = App\Laboratorio::orderby('nombre','asc')->get();
        return view('laboratorio.index',compact('laboratorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('crear-laboratorio'))
        {
            return redirect()->route('laboratorio.index');
        } 
        return view('laboratorio.insert');
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
            
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);

        App\Laboratorio::create($request->all());

        return redirect()->route('laboratorio.index')
                        ->with('exito','Laboratorio creado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratorio = App\Laboratorio::findorfail($id); 
        return view('laboratorio.view', compact('laboratorio',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('editar-laboratorio'))
        {
            return redirect()->route('laboratorio.index');
        } 
        $laboratorio = App\Laboratorio::findorfail($id);
        return view('laboratorio.edit', compact('laboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);

        $laboratorio = App\Laboratorio::findorfail($id);
        $laboratorio->update($request->all());

        return redirect()->route('laboratorio.index')
                         ->with('exito','Laboratorio modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('eliminar-laboratorio'))
        {
            return redirect()->route('laboratorio.index');
        } 
        $laboratorio = App\Laboratorio::findorfail($id);

        $laboratorio->delete();

        
        return redirect()->route('laboratorio.index')
                         ->with('exito','Laboratorio eliminado correctamente!');
    }
}
