<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Secretaria;
use App\Models\Paciente;

class AdminController extends Controller
{
    //funciones de administracion

    public function index(){
        $total_usuarios = User::count();
        $total_secretarias=Secretaria::count();
        $total_pacientes=Paciente::count();
        return view('admin.index', compact('total_usuarios', 'total_secretarias','total_pacientes'));
    }
}
