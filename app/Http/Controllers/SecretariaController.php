<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_secretarias=Secretaria::all();
        $secretarias = Secretaria::with(relations:'user')->get();


        return view('admin.secretarias.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          return view('admin.secretarias.create');
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
        return response()->json($datos);  */
        //dd($request->all());

       try  {


         $request->validate([
            'name' => 'required|max:250',
            'apellidos' => 'required|max:250',
            'celular' => 'required|max:20',
            'dni' => 'required|unique:secretarias',
            'fecha_nacimiento' => 'required|date',
            //'email' => 'required|max:250|unique:users',
            'direccion' => 'required|max:250',
            'password' => 'required|max:20|confirmed'
        ]);




        $usuarios = new User();
        $usuarios->name = $request->name . ' ' . $request->apellidos;
        $usuarios->email = $request->email;
        $usuarios->password = Hash::make($request['password']);
        $usuarios->save();



        $secretaria = new Secretaria();
        $secretaria->user_id = $usuarios->id;
        $secretaria->name = $request->name;
        $secretaria->apellidos = $request->apellidos;
        $secretaria->dni = $request->dni;
        $secretaria->celular = $request->celular;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->direccion = $request->direccion;

        $secretaria->save();

        return redirect()->route(route: 'admin.secretarias.index')
        ->with('mensaje','Se registró a la secretaria de forma correcta')
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
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secretaria = Secretaria::findOrFail($id);

        return view('admin.secretarias.show', compact('secretaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id){
        $secretaria = Secretaria::findOrFail($id);
        return view('admin.secretarias.edit', compact('secretaria'));
    }
        //


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{

            $request->validate([
            'name' => 'required|max:250',
            'apellidos' => 'required|max:250',
            'celular' => 'required|max:20',
           // 'dni' => 'required|unique:secretarias',
            'fecha_nacimiento' => 'required|date',
            //'email' => 'required|max:250|unique:users',
            'direccion' => 'required|max:250',
            //'password' => 'required|max:20|confirmed'
        ]);

        $secretaria = Secretaria::find($id);

        $secretaria->name = $request->name;
        $secretaria->apellidos= $request->apellidos;
        $secretaria->dni  = $request->dni;
        $secretaria->celular  = $request->celular;
        $secretaria->fecha_nacimiento  = $request->fecha_nacimiento;
        $secretaria->direccion  = $request->direccion;
        $secretaria->user->email = $request->email;

        if($request->filled(key:'password')){
            $secretaria->password = Hash::make($request['password']);
        }


         $secretaria->save();

          return redirect()->route(route: 'admin.secretarias.index')
        ->with('mensaje','Se actualizó al/la secretari@ de forma correcta')
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
                ->with('mensaje', 'Error al actualizar la secretaria: ' . $e->getMessage())
                ->with('icono', 'error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */

     public function confirmDelete($id){
        $secretaria = Secretaria::with (relations:'user')->findOrFail($id);

        return view('admin.secretarias.delete', compact('secretaria'));
    }
    public function destroy(Request $request, $id)
    {


         $user = User::findOrFail($id);
         $user->delete();
         return redirect()->route(route: 'admin.secretarias.index')
         ->with('mensaje','Se borró a la secretaria de forma correcta')
         ->with('icono','success');
    }
}
