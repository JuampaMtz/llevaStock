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
                            <th>Articulo</th>
                            <th>Marca</th>
                            <th>cantidad</th>
                            <th>Costo</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>
                           
                            @foreach ($ventas as $ventasT)

                            <tr>
                                <td>{{ $ventasT -> id }}</td>
                                <td>{{ $ventasT -> idArt }} - {{ $ventasT -> ventaA -> nombre}}</td>
                                <td>{{ $ventasT -> ventaA -> marca }}</td>
                                <td>{{ $ventasT -> cantidad }}</td>
                                <td>{{ $ventasT -> costo }}</td>
                                <td>{{ $ventasT -> fecha }}</td>
                            </tr>

                            @endforeach

                    </table>  
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
