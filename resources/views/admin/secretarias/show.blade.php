@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1> Datos de usuario:  {{ $secretaria->name . ' ' . $secretaria->apellidos}} </h1>
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
                                <p>{{$secretaria->name . ' ' . $secretaria->apellidos }}</p>
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
                                <label for="">dirección de usuario registrado: </label>
                                <p>{{$secretaria->direccion}}</p>
                                 @error('direccion')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">teléfono o cel registrado: </label>
                                <!--Esta funcionalidad es de prueba ya que no tengo al momento cuenta empresarial -->
                               <p><a href="https://wa.me/{{ $secretaria->celular }}?text={{ urlencode("Hola, confirmo que completé el registro en el sistema.")}}">{{ $secretaria->celular }}</a></p>
                                 @error('celular')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo de usuario registrado: </label>

                                <p><a href="mailto:{{ $secretaria->user->email }}?subject=Consulta&body=Hola, quisiera hacer una consulta.">{{ $secretaria->user->email }}</a></p>

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


