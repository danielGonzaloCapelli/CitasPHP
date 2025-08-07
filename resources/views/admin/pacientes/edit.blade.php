@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Editar registro </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">modifique los datos</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <form action="{{ url('/admin/pacientes/' . $paciente->id) }}" method="POST"  >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres: </label> <b>*</b>
                                <input type="text" value="{{$paciente->nombres}}" name="nombres"  class="form-control" required/>
                                @error('nombres')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos: </label> <b>*</b>
                                <input type="text" value="{{$paciente->apellidos}}" name="apellidos"  class="form-control" required/>
                                @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">fecha de nacimiento: </label> <b>*</b>
                                <input type="date" value="{{$paciente->fecha_nacimiento}}" name="fecha_nacimiento"  class="form-control" required/>
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro documento: </label> <b>*</b>
                                <input type="text" value="{{$paciente->dni}}" name="dni"  class="form-control" required/>
                                @error('dni')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="cuil">Cuil: </label> <b>*</b>
                                <input type="text" value="{{$paciente->nro_seguro_cuil}}" name="nro_seguro_cuil"  class="form-control" required/>
                                @error('nro_seguro_cuil')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="direccion">Dirección: </label> <b>*</b>
                                <input type="text" value="{{$paciente->direccion}}" name="direccion"  class="form-control" required/>
                                @error('direccion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro teléfono/celular: </label> <b>*</b>
                                <input type="text" value="{{$paciente->celular}}" name="celular"  class="form-control" required/>
                                @error('celular')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo de paciente: </label> <b>*</b>
                                <input type="email" value="{{$paciente->email}}" name="email"  class="form-control" required/>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Género: </label> <b>*</b>
                                <select name="genero" class="form-control">
                                    @if($paciente->genero == 'Masculino')
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                    @elseif($paciente->genero == 'Femenino')
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Otro">Otro</option>
                                    @else
                                         <option value="Otro">Otro</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>


                                    @endif

                                </select>
                                 @error('genero')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Grupo sanguineo: </label> <b>*</b>
                                <select  name="grupo_sanguineo" id="" class="form-control" value="{{ $paciente->grupo_sanguineo }}">

                                    <option value="A+" @selected($paciente->grupo_sanguineo == 'A+')>A+</option>
                                    <option value="A-" @selected($paciente->grupo_sanguineo == 'A-')>A-</option>
                                    <option value="B+" @selected($paciente->grupo_sanguineo == 'B+')>B+</option>
                                    <option value="B-" @selected($paciente->grupo_sanguineo == 'B-')>B-</option>
                                    <option value="O+" @selected($paciente->grupo_sanguineo == 'O+')>O+</option>
                                    <option value="O-" @selected($paciente->grupo_sanguineo == 'O-')>O-</option>
                                    <option value="AB+" @selected($paciente->grupo_sanguineo == 'AB+')>AB+</option>
                                    <option value="AB-" @selected($paciente->grupo_sanguineo == 'AB-')>AB-</option>

                                </select>
                                 @error('grupo_sanguineo')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Alergias: </label>
                                <input type="text"   value="{{$paciente->alergias}}" name="alergias" class="form-control"/>
                                 @error('alergias')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Enfermedades preexistentes: </label>
                                    <textarea rows="4" cols="50" value="{{ $paciente->enfermedades_preexistentes }}" name="enfermedades_preexistentes" class="form-control">{{ $paciente->enfermedades_preexistentes }}</textarea>
                                    @error('enfermedades_preexistentes')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Está medicado? enumerar: </label>
                                <textarea rows="4" cols="50" value="{{ $paciente->medicacion_actual }}" name="medicacion_actual" class="form-control">{{ $paciente->medicacion_actual }}</textarea>
                                 @error('medicacion_actual')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Contacto de emergencia: </label><b>*</b>
                               <input type="text" class="form-control" name="contacto_emergencia" value="{{ $paciente->contacto_emergencia }}" required/>
                                 @error('contacto_emergencia')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Observaciones: </label><b>*</b>
                               <input type="text" class="form-control" name="observaciones" value="{{ $paciente->observaciones }}" required/>
                                 @error('observaciones')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    </br>



                    <hr>




                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">

                            <a href={{ url('admin/pacientes') }} class="btn btn-secondary">Página anterior</a>
                            <button type="submit" class="btn btn-success"> Editar registro </button>
                        </div>
                        </div>
                    </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@endsection
