<html>
<head>
    <title>Modificar remito</title>

    <script type="text/javascript" src="{{ asset('js\fontawesome-all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\bootstrap.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js\bootstrap-dropdown.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    

 <div class="container-fluid">
    
           <br>     
                <div class="container">
                    <div class="wrapper">
                        <div class="col-md-10 col-md-offset-1" >
                            <div class="panel panel-default">
                                
                                <div class="panel-heading">Editar información:</div>
                                
                                <div class="panel-body">

                	    			<form action="{{route('Remito.update', $remitos->id)}}"  method="post" id="form1" class="form">
                	    				<input type="hidden" name="_token" value="{{csrf_token()}}">
                						<input type="hidden" name="_method" value="PUT">

	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="far fa-clipboard"></i></span>
	                                            <input type="text" class="form-control" maxlength="50" name="nroRem" placeholder="Número de remito" value="{{$remitos->nroRem}}" required>
	                                        </div>  
	                                        <br>
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
	                                            <input type="number" min="0" max="999999999999999999" step="any" class="form-control" name="precioTotal" placeholder="Precio TOTAL" value="{{$remitos->precioTotal}}" required>
	                                        </div>  
	                                        <br>
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
	                                            <input type="date" class="form-control" name="fecha" value="{{$remitos->fecha}}" required>
	                                        </div>  
	                                        <br>
	                                        <label for="categoria">Proveedor:</label>
	                                        {{Form::select('idProv',$proveedores, $remitos->idProv )}}       
                                     	    <hr>

                                        <button type= "submit" id="sub" name="nsubmit" class="btn btn-success">Modificar</button>

                                        <input type="button" onclick="history.back()" class="btn btn-primary" name="volver" value="Volver">

                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>
</html>