<?php
	require_once('clases/container.php');
    require_once('clases/AccesoDatos.php');
?>
<html>
<head>
	<title>Listado de CONTAINER</title>

	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<div class="container">
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de CONTAINER</h1>

<?php 

$ArrayDeContainer = Container::TraerTodosLosContainer(); 


echo "<table class='table'>
		<thead>
			<tr>
				<th>  Numero </th>
				<th>  Descripcion     </th>
				<th>  Pais       </th>
				<th>  Foto     </th>
			</tr> 
		</thead>";   	

	foreach ($ArrayDeContainer as $cont){
		echo " 	<tr>
					<td>".$cont->Getnumero()."</td>
					<td>".$cont->Getdescripcion()."</td>
                    <td>".$cont->Getpais()."</td>
					<td><img src='archivos/".$cont->Getfoto()."' width='100px' height='100px'/></td>
					   <td>
								<form method=post name=eliminar1  action=bajaenBD.php>
								<input type=submit name=botonEliminar1 class=MiBotonUTN value=Eliminar />
								<input type=hidden name=numeroCont value=".$cont->Getnumero()." />
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