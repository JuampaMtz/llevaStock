<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Listado de proveedores</title>
	<link rel="stylesheet" type="text/css" href="css/tablaPdf.css">
</head>
<body>
<table>
                        <thead>     
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Teléfono</th>
                            <th>E-Mail</th>
                        </tr>
                        </thead>

                            @foreach ($proveedores as $proveedoresT)
                            <tr>
                                <td>{{ $proveedoresT -> id }}</td>
                                <td>{{ $proveedoresT -> nombre }}</td>
                                <td>{{ $proveedoresT -> descripcion }}</td>
                                <td>{{ $proveedoresT -> telefono }}</td>
                                <td>{{ $proveedoresT -> email }}</td>
                            </tr>
                            @endforeach
                    </table>    


</body>
</html>