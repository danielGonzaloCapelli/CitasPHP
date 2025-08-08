<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Secretaria;
use App\Models\Paciente;
use App\Models\Doctor;
use App\Models\Horario;

class AdminController extends Controller
{
    //funciones de administracion

    public function index(){
        $total_usuarios = User::count();
        $total_secretarias=Secretaria::count();
        $total_pacientes=Paciente::count();
        $total_consultorios=Consultorio::count();
        $total_doctor=Doctor::count();
        $total_horario=Horario::count();
        
        return view('admin.index', compact('total_usuarios', 'total_secretarias','total_pacientes', 'total_consultorios','total_doctor','total_horario'));
    }
}
