@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos actuales a borrar de : {{$paciente->nombres}} </h1>
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
                <form action="{{ url('/admin/pacientes/'.$paciente->id) }}" method="POST"  >
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre de paciente: </label>
                                <input type="text" value="{{ $paciente->nombres }}" name="nombres"  class="form-control" disabled/>
                                @error('nombres')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror


                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Apellidos de paciente: </label>
                                <input type="text" value="{{ $paciente->apellidos }}" name="apellidos"  class="form-control" disabled/>
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
                                <label for="">Dni </label>
                                <input type="text" value="{{ $paciente->dni }}" name="dni"  class="form-control" disabled/>
                                 @error('dni')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                   {{--  <div class="row">
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
                    </div> --}}
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                            <a href={{ url('admin/usuarios') }} class="btn btn-secondary">Página anterior</a>
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

