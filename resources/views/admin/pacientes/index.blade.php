@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1 class="display"> Listado de pacientes </h1>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Pacientes registrados</h3>

                <div class="card-tools">
                  <a href={{url('admin/pacientes/create') }} class="btn btn-primary">Crear paciente</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                <table id="example1" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">#</th>
                                <!--<th scope="col">Nombres</th>-->
                                <th scope="col">Apellidos y apellidos</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Nro cuil:</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Email</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ $paciente->id }}
                                            <td>{{ $paciente->nombres }}  {{$paciente->apellidos}}</td>
                                            <!--<td>{{ $paciente->apellidos }}</td>-->
                                            <td>{{ $paciente->dni }}</td>
                                            <td>{{ $paciente->nro_seguro_cuil }}</td>
                                            <td>{{ $paciente->fecha_nacimiento }}</td>
                                            <td>{{ $paciente->genero }}</td>
                                            <td>{{ $paciente->direccion }}</td>
                                            <td>{{ $paciente->celular }}</td>
                                            <td>{{ $paciente->email }}</td>

                                            <td style="text-align:center">
                                                 <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ url('admin/pacientes/show/'.$paciente->id) }}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="{{ url('admin/pacientes/'.$paciente->id .'/edit') }}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                    <a href="{{ url('admin/pacientes/'.$paciente->id. '/confirm-delete') }}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                   <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Pacientes",
                                    "infoFiltered": "(Filtrado de _MAX_ total Pacientes)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Pacientes",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


</div>
@endsection
