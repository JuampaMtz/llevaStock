<html>
<head>
    <title>Modificar proveedor</title>

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

                	    			<form action="{{route('Proveedor.update', $proveedores->id)}}"  method="post" id="form1" class="form">
                	    				<input type="hidden" name="_token" value="{{csrf_token()}}">
                						<input type="hidden" name="_method" value="PUT">

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ $proveedores->nombre}}" required>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-address-card"></i></span>
                                            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" value="{{ $proveedores->descripcion}}" required>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="{{ $proveedores->telefono}}" required>
                                        </div>  
                                        <br>   
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="mail" id="mail" placeholder="E-Mail" value="{{ $proveedores->email}}" required>
                                        </div>        
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