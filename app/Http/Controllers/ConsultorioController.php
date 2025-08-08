<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultorios = Consultorio::all();
        return view('admin.consultorios.index', ['consultorios' => $consultorios]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Devolucion de vista para agregar consultorio
          return view('admin.consultorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /*  $datos = request()->all();
        return response()->json($datos); */
        try{

             $request->validate([
            'nombre' => 'required|max:100',
            'ubicacion' => 'required|max:100',
            'capaciadad' => 'required|max:20',
            'telefono' => 'required',
            'especialidad' => 'required',
            'estado' => 'required|max:20'

        ]);
        $consultorio= new Consultorio();

        $consultorio->nombre=$request->nombre;
        $consultorio->ubicacion=$request->ubicacion;
        $consultorio->telefono=$request->telefono;
        $consultorio->especialidad=$request->especialidad;
        $consultorio->capaciadad = $request->capaciadad;
        $consultorio->estado=$request->estado;

        $consultorio->save();
         return redirect()->route(route: 'admin.consultorios.index')
        ->with('mensaje','Se registró el paciente de forma correcta')
        ->with('icono','success');
        } catch (ValidationException $e) {
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
     * @param  \App\Models\Consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultorio = Consultorio::findOrFail($id);

        return view('admin.consultorios.show', compact('consultorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultorio = Consultorio::find($id);
        return view('admin.consultorios.edit', compact('consultorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultorio  $consultorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultorio $consultorio)
    {
        //
    }
}
