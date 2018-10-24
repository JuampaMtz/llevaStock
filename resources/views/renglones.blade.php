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
                            <th>cantidad</th>
                            <th>Costo renglón</th>
                            <th>Fecha</th>
                            <th>Remito</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                           
                            @foreach ($renglones as $renglonesT)

                            <tr>
                                <td>{{ $renglonesT -> id }}</td>
                                <td>{{ $renglonesT -> articulo_renglon-> id }} - {{ $renglonesT -> articulo_renglon-> nombre }}</td>
                                <td>{{ $renglonesT -> articulo_renglon-> marca }}</td>
                                <td>{{ $renglonesT -> cantidad }}</td>
                                <td>{{ $renglonesT -> costoIndividual }}</td>
                                <td>{{ $renglonesT -> remito_renglon -> fecha }}</td>
                                <td>{{ $renglonesT ->remito_renglon-> id }} - {{ $renglonesT ->remito_renglon-> nroRem }}</td>
                                <td>
                                    <span style="cursor:default;">
                                    <!-- BOTON MODIFICAR -->
                                        {{ Form::open(['route' => ['Renglon.edit', $renglonesT->id], 'method' => 'get']) }} 
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="fas fa-edit" style="cursor:pointer;"></i> </button>
                                        {{ Form::close() }}
                                     </span>
                                </td>
                                <td>
                                    <span style="cursor:default;">      
                                    <!-- BOTON ELIMINAR-->
                                    {{ Form::open(['route' => ['Renglon.destroy', $renglonesT->id], 'method' => 'delete']) }}     
                                        <button type="submit" class="btn btn-outline" style="background:transparent; font-size:14px;" ><i class="fas fa-trash-alt" style="cursor:pointer;"></i></button>
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
                                                <h4 class="modal-title">REGISTRAR RENGLON</h4>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{url('/insertarRenglon')}}" method="post" id="formulario_renglon">
   
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fas fa-archive"></i></span>
                                                        <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" required>
                                                    </div>  
                                                    <br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                                        <input type="text" class="form-control" type="number" min="0" max="999999999999999999" step="any" class="form-control" name="costoIndividual" placeholder="Costo del renglón" required>
                                                    </div>  
                                                    <br>
                                                    <label for="categoria">Articulo:</label>
                                                    {{Form::select('idArt',$articulos)}}  
                                                    <br>
                                                    <label for="categoria">Remito: </label>
                                                    {{Form::select('idRem',$remitos)}}  

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
