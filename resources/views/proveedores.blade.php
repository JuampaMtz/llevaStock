@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">          
                <div class="panel panel-default">
                    <table  class="table table-hover table-striped table-condensed" id="articulosTable">
                        <thead>     
                        <tr style="font-size:90%;">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Teléfono</th>
                            <th>E-Mail</th>
                            <th>Editar</th>
                            <th>Deshabilitar</th>
                        </tr>
                        </thead>

                            @foreach ($proveedores as $proveedoresT)
                            <tr class="">
                                <td>{{ $proveedoresT -> id }}</td>
                                <td>{{ $proveedoresT -> nombre }}</td>
                                <td>{{ $proveedoresT -> descripcion }}</td>
                                <td>{{ $proveedoresT -> telefono }}</td>
                                <td>{{ $proveedoresT -> email }}</td>
                                <td>
                                    <span style="cursor:default;">
                                    <!-- BOTON MODIFICAR -->
                                        {{ Form::open(['route' => ['Proveedor.edit', $proveedoresT->id], 'method' => 'get']) }} 
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="fas fa-edit" style="cursor:pointer;"></i> </button>
                                        {{ Form::close() }}
                                     </span>
                                </td>
                                <td>
                                    <span style="cursor:default;">      
                                    <!-- BOTON ELIMINAR-->
                                    {{ Form::open(['route' => ['Proveedor.darDeBaja', $proveedoresT->id], 'method' => 'post']) }}     
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="far fa-times-circle"></i></button>
                                    {{ Form::close() }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                    </table>    
                </div>  
            </div>

            <div class="col-md-2">
                <!--BOTON AGREGAR--> 
                <button class="btn btn-success" data-toggle="modal" data-target="#ventanaAgregar">Agregar Proveedor</button>
                <br>
                <br>
                <!--BOTON LISTADO PDF-->
                <form action="{{ url('pdfProveedores') }}" name="form_pdfProveedores">
                    <button type="submit" class="btn btn-primary">Generar listado</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>                    
            </div>          
                        <!-- MODAL AGREGAR-->
                        <div class="modal fade" id="ventanaAgregar" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                        <h4 class="modal-title">REGISTRAR PROVEEDOR</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('/insertarProveedor')}}" method="post" id="formulario_proveedor">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                                            </div>  
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-address-card"></i></span>
                                                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" required>
                                            </div>  
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                                            </div>  
                                            <br>   
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" required>
                                            </div>        
                                            <div class="modal-footer">
                                                <input type="submit" name="boton" class="btn btn-primary" value="Aceptar">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>

    <script type="text/javascript">
        $(document).ready( function () {
        $('#articulosTable').DataTable({
            "language": 
    {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
        });
    });
    </script>






                        
@endsection