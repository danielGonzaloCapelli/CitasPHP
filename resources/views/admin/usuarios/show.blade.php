@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos de usuario:  {{ $usuario->name }} </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Datos registrados</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre de usuario: </label>
                                <p>{{$usuario->name}}</p>
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
                                <label for="">Correo de usuario: </label>
                                <p>{{$usuario->email}}</p>
                                 @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                            <a href={{ url('admin/usuarios') }} class="btn btn-secondary">Página anterior</a>

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


