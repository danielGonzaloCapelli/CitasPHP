@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1 class="display-5"> Listado de Consultorios </h1>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Consultorios registrados</h3>

                <div class="card-tools">
                  <a href={{ url('admin/consultorios/create') }} class="btn btn-primary">Crear consultorio</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">

                <table id="example1" class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Teléfono/Interno</th>
                                <th scope="col">Capacidad</th>
                                <th scope="col">Habilitado</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultorios as $consultorio)
                                        <tr>
                                            <td>{{ $consultorio->id }}
                                            <td>{{ $consultorio->nombre }}</td>
                                            <td>{{ $consultorio->ubicacion }}</td>
                                            <td>{{ $consultorio->especialidad }}</td>
                                            <td>{{ $consultorio->telefono }}</td>
                                            <td>{{ $consultorio->capaciadad }}</td>
                                            <td>{{ $consultorio->estado }}</td>
                                            <td style="text-align:center">
                                                 <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ url('admin/consultorios/show/'.$consultorio->id) }}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="{{ url('admin/consultorios/'.$consultorio->id .'/edit') }}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                    <a href="{{ url('admin/consultorios/'.$consultorio->id. '/confirm-delete') }}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Consultorios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Consultorios",
                                    "infoFiltered": "(Filtrado de _MAX_ total Consultorios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Consultorios",
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
