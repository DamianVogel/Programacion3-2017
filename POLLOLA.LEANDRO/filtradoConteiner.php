<html>
<head>
	<title>Filtrado de Container</title>
	  
		<meta charset="UTF-8">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>
	<div class="container">
	
		<div class="page-header">
			<h1>Containers</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>FILTRADO </h1>

            <?PHP
                require_once("clases\container.php");
                //Si entra por primera vez selecciona, sino modifica con placeholder con valores
                if(isset($_POST["modificar"]))
                {
                   //ARRAY DE PRODUCTOS FILTRADO
                }
                else 
                {   
                    echo "	<form id=FormIngreso method=post enctype=multipart/form-data action=seleccionarenBD.php >
				            <input type=text name=paisFiltro placeholder='Ingrese pais para filtrar sus conteiner'  /><br>
				            <input type=submit class=MiBotonUTN name=modificar value=Seleccionar >
			                </form>";
                }
                require_once "ListadoContainer.php";
            ?>
		</div>
	</div>
</body>
</html>