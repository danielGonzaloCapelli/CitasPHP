@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos del consultorio:  {{ $consultorio->nombre }} </h1>
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
                                <label for="">Nombre de usuario función secretarios: </label>
                                <p>{{$consultorio->nombre . ' ' . $consultorio->ubicacion }}</p>
                                @error('nombre')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                    </div>
                    <br/>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Telefono/interno </label>
                                <p>{{$consultorio->telefono}}</p>
                                 @error('telefono')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Capacidad: </label>

                               <p>{{ $consultorio->capaciadad }}</p>
                                 @error('capaciadad')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Estado: </label>

                                <p>{{$consultorio->estado}}</p>

                                 @error('estado')
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

                            <a href={{ url('admin/consultorios') }} class="btn btn-secondary">Página anterior</a>

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


