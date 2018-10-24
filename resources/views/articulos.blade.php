@extends('layouts.app')

@section('content')


  


<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">               
            <br>         
                <div class="panel panel-default">
                    <table  class="table table-hover table-striped table-condensed" id="articulosTable">
                        <thead>     
                        <tr style="font-size:90%;">
                            <th>ID</th>
                            <th>Articulo</th>
                            <th>Marca</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Proveedor</th>
                            <th>Editar</th>
                            <th>Deshabilitar</th>
                        </tr>
                        </thead>
                           
                            @foreach ($articulos as $articulosT)
                            <tr>
                                <td>{{ $articulosT -> id }}</td>
                                <td>{{ $articulosT -> nombre }}</td>
                                <td>{{ $articulosT -> marca }}</td>
                                <td>{{ $articulosT -> descripcion }}</td>
                                <td>{{ $articulosT -> precio }}</td>
                                @if (($articulosT -> stockFinal) == null)
                                    <td>0</td>
                                @else
                                    <td>{{ $articulosT -> stockFinal}}</td>
                                @endif
                                <td>{{ $articulosT -> proveedorNombre}}</td>
                                <td>
                                    <span style="cursor:default;">
                                    <!-- BOTON MODIFICAR -->
                                        {{ Form::open(['route' => ['Articulo.edit', $articulosT->id], 'method' => 'get']) }} 
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="fas fa-edit" style="cursor:pointer;"></i> </button>
                                        {{ Form::close() }}
                                     </span>
                                </td>
                                <td>
                                    <span style="cursor:default;">      
                                    <!-- BOTON ELIMINAR-->
                                    {{ Form::open(['route' => ['Articulo.darDeBaja', $articulosT->id], 'method' => 'post']) }}     
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="far fa-times-circle"></i></button>
                                    {{ Form::close() }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach

                    </table>  
                </div>  
            </div>    
                    

                <!--BOTON AGREGAR-->                               
                <div class="col-md-2"> 
                    <button style="font-size: 40px;" class="btn btn-default" data-toggle="modal" data-target="#ventanaAgregar"><i class="far fa-plus-square"></i></button>
                </div>          
                                    <div class="modal fade" id="ventanaAgregar" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                                <h4 class="modal-title">REGISTRAR ARTICULO</h4>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{url('/insertarArticulo')}}" method="post" id="formulario_articulo">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fas fa-dolly"></i></span>
                                                        <input type="text" class="form-control" name="nombre" placeholder="Artículo"required>
                                                    </div>  
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fab fa-medium-m"></i></span>
                                                        <input type="text" class="form-control" name="marca" placeholder="Marca" required>
                                                    </div>  
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="far fa-comment-alt"></i></span>
                                                        <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required>
                                                    </div>  
                                                    <br>   
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                                        <input type="number" min="0" max="999999999999999999" step="any" class="form-control" name="precio" placeholder="Precio"required>
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

