<html>
<head>
	<title>Modificar articulo</title>

    <script type="text/javascript" src="{{ asset('js\fontawesome-all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js\bootstrap.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js\bootstrap-dropdown.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	

 <div class="container-fluid">
    <div class="row">
    <div class="col-md-12" style="text-align: center; height: 50px; background-color:#000;">
        <a href="http://www.sedessapientiae.edu.ar/index-2.htm">
           
        </a>                    
    </div>
</div>        
           <br>     
                <div class="container">
                    <div class="wrapper">
                        <div class="col-md-10 col-md-offset-1" >
                            <div class="panel panel-default">
                                
                                <div class="panel-heading">Editar información:</div>
                                
                                <div class="panel-body">
                                
                                        <form   action="{{route('Articulo.update', $articulos->id)}}"  method="post" id="form1" class="form">								
                    	    				<input type="hidden" name="_token" value="{{csrf_token()}}">
                    						<input type="hidden" name="_method" value="PUT">	


                    						<div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-dolly"></i></span>
                                                <input type="text" class="form-control" name="nombre"  id="nombre" value="{{ $articulos->nombre}}" placeholder="Nombre" required>
                                            </div>  
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fab fa-medium-m"></i></span>
                                                <input type="text" class="form-control" name="marca" id="marca" value="{{ $articulos->marca}}" placeholder="Marca" required>
                                            </div>  
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="far fa-comment-alt"></i></span>
                                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $articulos->descripcion}}" placeholder="Descripción" required>
                                            </div>  
                                            <br>   
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fas fa-dollar-sign"></i></span>
                                                <input type="number" min="0" max="999999999999999999" step="any" class="form-control" id="precio" name="precio" value="{{ $articulos->precio}}" placeholder="Precio" required>
                                            </div>  
                                            <br>
                                            <label for="categoria">Proveedor:</label>

                                            {{Form::select('idProv',$proveedores, $articulos->idProv )}}

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
