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
                <form action="{{ url('/admin/secretarias/create') }}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres: </label> <b>*</b>
                                <input type="text" value="{{old('name')}}" name="name"  class="form-control" required/>
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
                                <label for="">Dirección: </label> <b>*</b>
                                <input type="address" value="{{old('direccion')}}" name="direccion"  class="form-control" required/>
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
                                <label for="">Correo de secretaria/o: </label> <b>*</b>
                                <input type="email" value="{{old('email')}}" name="email"  class="form-control" required/>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <br/>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password: </label> <b>*</b>
                                <input type="password" value="{{old('password')}}" name="password" class="form-control" required/>
                                 @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Reingrese su password: </label> <b>*</b>
                                <input type="password"   value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control" required/>
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
