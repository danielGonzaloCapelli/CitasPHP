<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('admin.usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create(){
       // $create=User::creating();
        return view('admin.usuarios.create');
    }

    public function store(Request  $request){
         /* $datos = request()->all();
        return response()->json($datos); */

       $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|max:250|unique:users',
            'password' => 'required|max:20|confirmed'


        ]);

        $usuarios = new User();
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = Hash::make($request['password']);
        $usuarios->save();

        return redirect()->route(route: 'admin.usuarios.index')
        ->with('mensaje','Se registró al usurio de forma correcta')
        ->with('icono','success');
    }

    public function show($id){

        $usuario = User::findOrFail($id);

        return view('admin.usuarios.show', compact('usuario'));


    }

    public function edit($id){
        $usuario = User::findOrFail($id);

        return view('admin.usuarios.edit', compact('usuario'));
    }

    public function update(Request  $request, $id){

          $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|max:250',
            'password' => 'nullable|max:20|confirmed'
        ]);

        $usuario = User::find($id);

        $usuario->name = $request->name;
        $usuario->email= $request->email;

        if($request->filled(key:'password')){
            $usuario->password = Hash::make($request['password']);
        }


         $usuario->save();

          return redirect()->route(route: 'admin.usuarios.index')
        ->with('mensaje','Se actualizó al usurio de forma correcta')
        ->with('icono','success');
    }

    public function confirmDelete($id){
        $usuario = User::findOrFail($id);

        return view('admin.usuarios.delete', compact('usuario'));
    }

    public function destroy(Request $request, $id)
    {

          $usuario = User::destroy($id);
          return redirect()->route(route: 'admin.usuarios.index')
          ->with('mensaje','Se borró al usurio de forma correcta')
          ->with('icono','success');
    }



}
