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
                <form action="{{ url('/admin/consultorios/create') }}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre: </label> <b>*</b>
                                <input type="text" value="{{old('nombre')}}" name="nombre"  class="form-control" required/>
                                @error('nombre')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Ubicación: </label> <b>*</b>
                                <input type="text" value="{{old('ubicacion')}}" name="ubicacion"  class="form-control" required/>
                                @error('ubicacion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Teléfono/interno: </label> <b>*</b>
                                <input type="text" value="{{old('telefono')}}" name="telefono"  class="form-control" required/>
                                @error('telefono')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" value="{{old('especialidad')}}" name="especialidad"  class="form-control" required/>
                                @error('especialidad')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Capacidad: </label> <b>*</b>
                                <input type="text" value="{{old('capaciadad')}}" name="capaciadad"  class="form-control" required/>
                                @error('capaciadad')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Estado: </label> <b>*</b>
                                <input type="text" value="{{old('estado')}}" name="estado"  class="form-control" required/>
                                @error('estado')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                       {{--  <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo de secretaria/o: </label> <b>*</b>
                                <input type="email" value="{{old('email')}}" name="email"  class="form-control" required/>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}
                        <br/>
                       {{--  <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password: </label> <b>*</b>
                                <input type="password" value="{{old('password')}}" name="password" class="form-control" required/>
                                 @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Reingrese su password: </label> <b>*</b>
                                <input type="password"   value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control" required/>
                                 @error('password_confirmation')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}
                    </div>



                </br>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                            <a href={{ url('admin/consultorios') }} class="btn btn-secondary">Página anterior</a>
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
