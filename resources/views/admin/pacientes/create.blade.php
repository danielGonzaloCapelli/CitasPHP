@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Crear nuevo registro </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Complete los datos</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <form action="{{ url('/admin/pacientes/create') }}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres: </label> <b>*</b>
                                <input type="text" value="{{old('nombres')}}" name="nombres"  class="form-control" required/>
                                @error('name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos: </label> <b>*</b>
                                <input type="text" value="{{old('apellidos')}}" name="apellidos"  class="form-control" required/>
                                @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">fecha de nacimiento: </label> <b>*</b>
                                <input type="date" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento"  class="form-control" required/>
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro documento: </label> <b>*</b>
                                <input type="text" value="{{old('dni')}}" name="dni"  class="form-control" required/>
                                @error('dni')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="cuil">Cuil: </label> <b>*</b>
                                <input type="text" value="{{old('nro_seguro_cuil')}}" name="nro_seguro_cuil"  class="form-control" required/>
                                @error('nro_seguro_cuil')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="direccion">Dirección: </label> <b>*</b>
                                <input type="text" value="{{old('direccion')}}" name="direccion"  class="form-control" required/>
                                @error('direccion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro teléfono/celular: </label> <b>*</b>
                                <input type="text" value="{{old('celular')}}" name="celular"  class="form-control" required/>
                                @error('celular')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo de paciente: </label> <b>*</b>
                                <input type="email" value="{{old('email')}}" name="email"  class="form-control" required/>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Género: </label> <b>*</b>
                                <select name="genero" class="form-control">
                                    <option value="M">MASCULINO</option>
                                    <option value="F">FEMENINO</option>
                                    
                                </select>
                                 @error('genero')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Grupo sanguineo: </label> <b>*</b>
                                <select  name="grupo_sanguineo" id="" class="form-control" >
                                    <option value="A+">A+</option>
                                    <option value="A+">A-</option>
                                    <option value="A+">B+</option>
                                    <option value="A+">B-</option>
                                    <option value="A+">O+</option>
                                    <option value="A+">O-</option>

                                </select>
                                 @error('grupo_sanguineo')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Alergias: </label>
                                <input type="text"   value="{{old('alergias')}}" name="alergias" class="form-control"/>
                                 @error('alergias')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Enfermedades preexistentes: </label>
                                    <textarea rows="4" cols="50" value="{{ old('enfermedades_preexistentes') }}" name="enfermedades_preexistentes" class="form-control">Escribe tu mensaje aquí...</textarea>
                                    @error('enfermedades_preexistentes')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Está medicado? enumerar: </label>
                                <textarea rows="4" cols="50" value="{{ old('medicacion_actual') }}" name="medicacion_actual" class="form-control">Escribe tu mensaje aquí...</textarea>
                                 @error('medicacion_actual')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Contacto de emergencia: </label><b>*</b>
                               <input type="text" class="form-control" name="contacto_emergencia" value="{{ old('contacto_emergencia') }}" required/>
                                 @error('contacto_emergencia')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Observaciones: </label><b>*</b>
                               <input type="text" class="form-control" name="observaciones" value="{{ old('observaciones') }}" required/>
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
                            <button type="submit" class="btn btn-success"> Crear registro </button>
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
