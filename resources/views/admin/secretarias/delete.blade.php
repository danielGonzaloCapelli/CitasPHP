@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos actuales a borrar de : {{$secretaria->name}} </h1>
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
                <form action="{{ url('/admin/secretarias/'.$secretaria->user->id) }}" method="POST"  >
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre: </label>
                                <input type="text" value="{{ $secretaria->name }}" name="name"  class="form-control" disabled/>
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
                                <label for="">Apellidos: </label>
                                <input type="text" value="{{ $secretaria->apellidos }}" name="apellidos"  class="form-control" disabled/>
                                @error('apellidos')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Dni: </label>
                                <input type="text" value="{{ $secretaria->dni }}" name="dni"  class="form-control" disabled/>
                                @error('dni')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo: </label>
                                <input type="email" value="{{  $secretaria->user->email }}" name="email"  class="form-control" disabled/>
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

                            <a href={{ url('admin/secretarias') }} class="btn btn-secondary">Página anterior</a>
                            <button type="submit" class="btn btn-danger"> Borrar usuario </button>
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

