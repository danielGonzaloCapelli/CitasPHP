@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Crear nuevo usuario </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Complete los datos</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <form action="{{ url('/admin/usuarios/create') }}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre de usuario: </label> <b>*</b>
                                <input type="text" value="{{old('name')}}" name="name"  class="form-control" required/>
                                @error('name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo de usuario: </label> <b>*</b>
                                <input type="email" value="{{old('email')}}" name="email"  class="form-control" required/>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Password: </label> <b>*</b>
                                <input type="password" value="{{old('password')}}" name="password" value={{ old('password') }} class="form-control" required/>
                                 @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
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

                            <a href={{ url('admin/usuarios') }} class="btn btn-secondary">Página anterior</a>
                            <button type="submit" class="btn btn-success"> Registrar </button>
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
