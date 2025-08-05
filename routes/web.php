<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas para el admistrador
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

//rutas para el admin - usuario
Route::get('/admin/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('admin.usuarios.index')->middleware('auth');

//rutas de creacion de usuarios
//rutas para el admin - usuario
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'create'])->name('admin.usuarios.create')->middleware('auth');

Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'store'])->name('admin.usuarios.create')->middleware('auth');

Route::get('/admin/usuarios/show/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])->name('admin.usuarios.show')->middleware('auth');

Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth');

Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('admin.usuarios.update')->middleware('auth');

Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuariosController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete')->middleware('auth');

Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth');

///Rutas  index de secretarias


Route::get('/admin/secretarias', [App\Http\Controllers\SecretariaController::class, 'index'])->name('admin.secretarias.index')->middleware('auth');



Route::get('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'create'])->name('admin.secretarias.create')->middleware('auth');

Route::post('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'store'])->name('admin.secretarias.store')->middleware('auth');

Route::get('/admin/secretarias/show/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])->name('admin.secretarias.show')->middleware('auth');

Route::get('/admin/secretarias/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])->name('admin.secretarias.edit')->middleware('auth');

Route::put('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])->name('admin.secretarias.update')->middleware('auth');

Route::get('/admin/secretarias/{id}/confirm-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelete'])->name('admin.secretarias.confirmDelete')->middleware('auth');

Route::delete('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'destroy'])->name('admin.secretarias.destroy')->middleware('auth');

/// Fin Rutas  index de secretarias

///rutas pacientes

Route::get('/admin/pacientes', [App\Http\Controllers\PacienteController::class, 'index'])->name('admin.pacientes.index')->middleware('auth');



Route::get('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('admin.pacientes.create')->middleware('auth');

Route::post('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'store'])->name('admin.pacientes.store')->middleware('auth');

Route::get('/admin/pacientes/show/{id}', [App\Http\Controllers\PacienteController::class, 'show'])->name('admin.pacientes.show')->middleware('auth');

Route::get('/admin/pacientes/{id}/edit', [App\Http\Controllers\PacienteController::class, 'edit'])->name('admin.pacientes.edit')->middleware('auth');

Route::put('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->name('admin.pacientes.update')->middleware('auth');

Route::get('/admin/pacientes/{id}/confirm-delete', [App\Http\Controllers\PacienteController::class, 'confirmDelete'])->name('admin.pacientes.confirmDelete')->middleware('auth');

Route::delete('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'destroy'])->name('admin.pacientes.destroy')->middleware('auth');


