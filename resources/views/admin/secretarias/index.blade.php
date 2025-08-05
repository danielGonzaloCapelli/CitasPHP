@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1 class="display-5"> Listado de secretarias </h1>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Secretarias registradas</h3>

                <div class="card-tools">
                  <a href={{  }} class="btn btn-primary">Crear secretaria</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                <table id="example1" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Email</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($secretarias as $secretaria)
                                        <tr>
                                            <td>{{ $secretaria->id }}
                                            <td>{{ $secretaria->name }}</td>
                                            <td>{{ $secretaria->apellidos }}</td>
                                            <td>{{ $secretaria->dni }}</td>
                                            <td>{{ $secretaria->fecha_nacimiento }}</td>
                                            <td>{{ $secretaria->direccion }}</td>
                                            <td>{{ $secretaria->celular }}</td>
                                            <td>{{ $secretaria->user->email }}</td>

                                            <td style="text-align:center">
                                                 <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ url('admin/secretarias/show/'.$secretaria->id) }}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="{{ url('admin/secretarias/'.$secretaria->id .'/edit') }}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                    <a href="{{ url('admin/secretarias/'.$secretaria->id. '/confirm-delete') }}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Secretarias",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Secretarias",
                                    "infoFiltered": "(Filtrado de _MAX_ total Secretarias)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Secretarias",
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
