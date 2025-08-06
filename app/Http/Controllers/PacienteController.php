<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pacientes = Paciente::all();
        return view('admin.pacientes.index', ['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try  {


         $request->validate([
            'nombres' => 'required|max:250',
            'apellidos' => 'required|max:250',
            'celular' => 'required|max:20',
            'dni' => 'required|unique:pacientes',
            'fecha_nacimiento' => 'required|date',
            'nro_seguro_cuil' => 'required|max:18',
            'direccion' => 'required|max:250',
            'correo' => 'required|max:100',
            'grupo_sanguineo' => 'required|max:4',
            'alergias' => 'max:500',


         ]);








        $paciente = new Paciente();

        $paciente->name = $request->name;
        $paciente->apellidos = $request->apellidos;
        $paciente->dni = $request->dni;
        $paciente->celular = $request->celular;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->correo=$request->correo;

        $paciente->save();

        return redirect()->route(route: 'admin.pacientes.index')
        ->with('mensaje','Se registró el paciente de forma correcta')
        ->with('icono','success');
        }
        catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('mensaje', 'Errores de validación')
                ->with('icono', 'error');
    }
        catch (\Exception $e) {
            return redirect()->back()
                ->with('mensaje', 'Error al registrar la secretaria: ' . $e->getMessage())
                ->with('icono', 'error');

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('admin.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
