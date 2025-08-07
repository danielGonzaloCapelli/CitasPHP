@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos del paciente:</h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de paciente: {{ $paciente->nombres }} {{ $paciente->apellidos }}</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres: </label> <b>*</b>
                                <input type="text" value="{{$paciente->nombres}}" name="nombres"  class="form-control" disabled/>
                                @error('name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos: </label> <b>*</b>
                                <input type="text" value="{{$paciente->apellidos}}" name="apellidos"  class="form-control" disabled/>
                                @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">fecha de nacimiento: </label> <b>*</b>
                                <input type="date" value="{{$paciente->fecha_nacimiento}}" name="fecha_nacimiento"  class="form-control" disabled/>
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro documento: </label> <b>*</b>
                                <input type="text" value="{{$paciente->dni}}" name="dni"  class="form-control" disabled/>
                                @error('dni')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="cuil">Cuil: </label> <b>*</b>
                                <input type="text" value="{{$paciente->nro_seguro_cuil}}" name="nro_seguro_cuil"  class="form-control" disabled/>
                                @error('nro_seguro_cuil')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="direccion">Dirección: </label> <b>*</b>
                                <input type="text" value="{{$paciente->direccion}}" name="direccion"  class="form-control" disabled/>
                                @error('direccion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro teléfono/celular: </label> <b>*</b>
                                <input type="text" value="{{$paciente->celular}}" name="celular"  class="form-control" disabled/>
                                @error('celular')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo de paciente: </label> <b>*</b>
                                <input type="email" value="{{$paciente->email}}" name="email"  class="form-control" disabled/>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Género: </label> <b>*</b>
                                <input type="text" value="{{$paciente->genero}}" name="genero" class="form-control" disabled/>
                                 @error('genero')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Grupo sanguineo: </label> <b>*</b>
                                <input type="text"   value="{{$paciente->grupo_sanguineo}}" name="grupo_sanguineo" class="form-control" disabled/>
                                 @error('grupo_sanguineo')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Alergias: </label>
                                <input type="text"   value="{{$paciente->alergias}}" name="alergias" class="form-control" disabled/>
                                 @error('alergias')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Enfermedades preexistentes: </label>
                                    <textarea rows="4" cols="50" value="{{ $paciente->enfermedades_preexistentes }}" name="enfermedades_preexistentes" class="form-control" disabled>{{ $paciente->enfermedades_preexistentes }}</textarea>
                                    @error('enfermedades_preexistentes')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Está medicado? enumerar: </label>
                                <textarea rows="4" cols="50" value="{{ $paciente->medicacion_actual }}" name="medicacion_actual" class="form-control" disabled>{{ $paciente->medicacion_actual }}</textarea>
                                 @error('medicacion_actual')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Contacto de emergencia: </label><b>*</b>
                               <input type="text" class="form-control" name="contacto_emergencia" value="{{ $paciente->contacto_emergencia }}" disabled/>
                                 @error('contacto_emergencia')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Observaciones: </label><b>*</b>
                               <input type="text" class="form-control" name="observaciones" value="{{ $paciente->observaciones }}" disabled/>
                                 @error('observaciones')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    </br>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                            <a href={{ url('admin/pacientes') }} class="btn btn-secondary">Página anterior</a>

                            </div>
                        </div>
                    </div>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@endsection

