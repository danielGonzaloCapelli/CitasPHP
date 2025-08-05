@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Modificar registro </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Complete los datos a modificar</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <form action="{{url('admin/secretarias/'. $secretaria->id) }}" method="POST"  >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres: </label>
                                <input type="text" value="{{ $secretaria->name }}" name="name"  class="form-control" />
                                @error('name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos: </label>
                                <input type="text" value="{{ $secretaria->apellidos }}" name="apellidos"  class="form-control" />
                                @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">fecha de nacimiento: </label>
                                <input type="date" value="{{ $secretaria->fecha_nacimiento }}" name="fecha_nacimiento"  class="form-control" />
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro documento: </label>
                                <input type="text" value="{{ $secretaria->dni }}" name="dni"  class="form-control" />
                                @error('dni')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Dirección: </label>
                                <input type="address" value="{{ $secretaria->direccion }}" name="direccion"  class="form-control" />
                                @error('direccion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nro teléfono/celular: </label>
                                <input type="text" value="{{ $secretaria->celular }}" name="celular"  class="form-control" />
                                @error('celular')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo de secretaria/o: </label>
                                <input type="email" value="{{ $secretaria->user->email }}" name="email"  class="form-control" />
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br/>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password: </label>
                                <input type="password" value="{{old('password')}}" name="password" class="form-control" />
                                 @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Reingrese su password: </label>
                                <input type="password"   value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control" />
                                 @error('password_confirmation')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                            <a href={{ url('admin/secretarias') }} class="btn btn-secondary">Página anterior</a>
                            <button type="submit" class="btn btn-success"> Modificar registro </button>
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
