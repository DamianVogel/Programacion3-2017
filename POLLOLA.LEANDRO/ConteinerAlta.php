<html>
<head>
	<title>ALTA de Container</title>
	  
		<meta charset="UTF-8">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>
<?php     
	require_once("clases\container.php");
?>
	<div class="container">
	
		<div class="page-header">
			<h1>Container</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>ALTA-Containers</h1>

			<form id="FormIngreso" method="post" enctype="multipart/form-data" action="guardarenBD.php" >
				<input type="text" name="numeroCont" placeholder="Ingrese Numero de container"  /><br>
				<input type="text" name="descCont" placeholder="Ingrese Descripcion"  /><br>
                <input type="text" name="paisCont" placeholder="Ingrese Pais"  /><br>
 				<input type="file" name="archivo" /> <br>
				<input type="submit" class="MiBotonUTN" name="guardar" />
			</form>

		
		</div>
	</div>
</body>
</html>