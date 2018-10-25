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
                            <th>Número de remito</th>
                            <th>Fecha</th>
                            <th>Precio TOTAL</th>
                            <th>Proveedor</th>
                            <th>Editar</th>
                            <th>Deshabilitar</th>
                        </tr>
                        </thead>
                           
                            @foreach ($remitos as $remitosT)
                            <tr>
                                <td>{{ $remitosT -> id }}</td>
                                <td>{{ $remitosT -> nroRem }}</td>
                                <td>{{ $remitosT -> fecha }}</td>
                                <td>{{ $remitosT -> precioTotal }}</td>
                                <td>{{ $remitosT ->proveedoreRm-> id }} - {{ $remitosT ->proveedoreRm-> nombre }}</td>
                                <td>
                                    <span style="cursor:default;">
                                    <!-- BOTON MODIFICAR -->
                                        {{ Form::open(['route' => ['Remito.edit', $remitosT->id], 'method' => 'get']) }} 
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="fas fa-edit" style="cursor:pointer;"></i> </button>
                                        {{ Form::close() }}
                                     </span>
                                </td>
                                <td>
                                    <span style="cursor:default;">      
                                    <!-- BOTON ELIMINAR-->
                                    {{ Form::open(['route' => ['Remito.darDeBaja', $remitosT->id], 'method' => 'post']) }}     
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
                <button class="btn btn-success" data-toggle="modal" data-target="#ventanaAgregar">Agregar Remito</button>
            </div>        
                                    <!-- MODAL AGREGAR-->
                                    <div class="modal fade" id="ventanaAgregar" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                                <h4 class="modal-title">REGISTRAR REMITO</h4>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{url('/insertarRemito')}}" method="post" id="formulario_remito">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="far fa-clipboard"></i></span>
                                                        <input type="text" class="form-control" maxlength="50" name="nroRem" placeholder="Número de remito" required>
                                                    </div>  
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                                        <input type="number" min="0" max="999999999999999999" step="any" class="form-control" name="precioTotal" placeholder="Precio TOTAL" required>
                                                    </div>  
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                                                        <input type="date" class="form-control" name="fecha" required>
                                                    </div>  
                                                    <br>
                                                    <label for="categoria">Proveedor:</label>
                                                    {{Form::select('idProv',$proveedores)}}    
                                         
                                                    <div class="modal-footer">
                                                        <input type="submit" name="boton" class="btn btn-primary" value="Aceptar">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </div>
                                                </form>  
                                            </div>
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
