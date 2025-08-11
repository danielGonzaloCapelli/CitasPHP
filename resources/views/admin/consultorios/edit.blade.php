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
                <form action="{{url('admin/consultorios/'. $consultorio->id) }}" method="POST"  >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres: </label>
                                <input type="text" value="{{ $consultorio->nombre }}" name="nombre"  class="form-control" />
                                @error('nombre')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Ubicacion: </label>
                                <input type="text" value="{{ $consultorio->ubicacion }}" name="ubicacion"  class="form-control" />
                                @error('ubicacion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Telefono/Interno: </label>
                                <input type="text" value="{{ $consultorio->telefono }}" name="telefono"  class="form-control" />
                                @error('telefono')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Capacidad: </label>
                                <input type="text" value="{{ $consultorio->capaciadad }}" name="capaciadad"  class="form-control" />
                                @error('dncapaciadadi')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Especialidad: </label>
                                <input type="text" value="{{ $consultorio->especialidad }}" name="especialidad"  class="form-control" />
                                @error('especialidad')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Estado: </label>
                                <input type="text" value="{{ $consultorio->estado }}" name="estado"  class="form-control" />
                                @error('estado')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                       
                    </div>


                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                            <a href={{ url('admin/consultorios') }} class="btn btn-secondary">Página anterior</a>
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
