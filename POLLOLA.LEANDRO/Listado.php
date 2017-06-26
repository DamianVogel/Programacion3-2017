<?php
	require_once('clases/usuario.php');
?>
<html>
<head>
	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>

	<div class="container">
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de USUARIOS</h1>

<?php 
//Array en ARCHIVO
$ArrayDeUsuarios = Usuario::TraerTodosLosUsuarios();

echo "<table class='table'>
		<thead>
			<tr>
				<th>  Nombre </th>
				<th>  Correo     </th>
				<th>  Edad       </th>
			</tr> 
		</thead>";   	

	foreach ($ArrayDeUsuarios as $user){

		echo " 	<tr>
					<td>".$user->GetNombre()."</td>
					<td>".$user->GetCorreo()."</td>
                    <td>".$user->GetEdad()."</td>
                    <td>
                    <form method=post name=eliminar1  action=bajaARCHIVOS.php>
					<input type=submit name=botonEliminar1 class=MiBotonUTN value=Eliminar />
					<input type=hidden name=nombreUser value=".$user->GetNombre()." />
					</form>
					</td>
				</tr>";
	}	
        echo "</table>";		
?>
		</div>
	</div>
</body>
</html>