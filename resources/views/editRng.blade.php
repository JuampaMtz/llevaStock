<html>
<head>
    <title>Modificar renglón</title>

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

                	    			<form action="{{route('Renglon.update', $renglones->id)}}"  method="post" id="form1" class="form">
                	    				<input type="hidden" name="_token" value="{{csrf_token()}}">
                						<input type="hidden" name="_method" value="PUT">

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-archive"></i></span>
                                                <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" value="{{ $renglones->cantidad }}" required>
                                            </div>  
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                                <input type="text" class="form-control" type="number" min="0" max="999999999999999999" step="any" class="form-control" name="costoIndividual" placeholder="Costo del renglón" value="{{ $renglones->costoIndividual }}" required>
                                            </div>  
                                            <br>
                                            <label for="categoria">Articulo:</label>
                                            {{Form::select('idArt',$articulos,$renglones->idArt )}}  
                                            <br>
                                            <label for="categoria">Remito: </label>
                                            {{Form::select('idRem',$remitos,$renglones->idRem)}}     
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