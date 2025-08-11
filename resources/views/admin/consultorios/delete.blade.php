@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos actuales a borrar de : {{$consultorio->nombre}} </h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">¿Esta seguro de borrar este registro?</h3>

                <div class="card-tools">

                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <form action="{{ url('/admin/consultorios/'.$consultorio->id) }}" method="POST"  >
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre: </label>
                                <input type="text" value="{{ $consultorio->nombre }}" name="nombre"  class="form-control" disabled/>
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
                                <label for="">Ubicacion: </label>
                                <input type="text" value="{{ $consultorio->ubicacion }}" name="ubicacion"  class="form-control" disabled/>
                                @error('ubicacion')
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
                                <input type="text" value="{{ $consultorio->capaciadad }}" name="capaciadad"  class="form-control" disabled/>
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
                                <label for="">Especialiad: </label>
                                <input type="text" value="{{  $consultorio->especialidad }}" name="especialidad"  class="form-control" disabled/>
                                 @error('especialidad')
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
                            <button type="submit" class="btn btn-danger"> Borrar consultorio </button>
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
