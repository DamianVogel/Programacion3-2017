<html>
<head>
	<title>MODIFICACION de PRODUCTOS</title>
	  
		<meta charset="UTF-8">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>
	<div class="container">
	
		<div class="page-header">
			<h1>PRODUCTOS</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>MODIFICACION -LISTADO - con archivos -</h1>

            <?PHP
                require_once("clases\producto.php");
                //Si entra por primera vez selecciona, sino modifica con placeholder con valores
                if(isset($_POST["modificar"]) && $existeProducto==1 )
                {
                    echo "	<form id=FormIngreso method=post enctype=multipart/form-data action=modificarArchivo.php >
				            <input type=text name=codBarra placeholder='Codigo Actual:$codProducto'  />
                            <input type=hidden name=codAnterior value='$codProducto' />
                            <input type=hidden name=posicionArray value='$posicionArray' />
                            <input type=text name=nombre placeholder='Nombre Actual:$nombreProducto'  />
                            <input type=file name=archivo value='$pathFotoProducto' /> 
				            <input type=submit class=MiBotonUTN name=modificar value=Modificar Valores/>
			                </form>";
                }
                else if (isset($_POST["botonModificacion"])) 
                {
                     echo "	<form id=FormIngreso method=post enctype=multipart/form-data action=seleccionarenARCHIVO.php >
				            <input type=hidden name=codBarra value=$_POST[codBarra]  />
				            <input type=submit class=MiBotonUTN name=modificar value=CONFIRMA MODIFICAR >
			                </form>";
                }
                else 
                {   
                    echo "	<form id=FormIngreso method=post enctype=multipart/form-data action=seleccionarenARCHIVO.php >
				            <input type=text name=codBarra placeholder='Ingrese codBarra del prod. a modificar'  />
				            <input type=submit class=MiBotonUTN name=modificar value=Seleccionar/>
			                </form>";
                }

            $ArrayDeProductos = Producto::TraerTodosLosProductos(); //MODIFIQUE ESTE POR BD AGREGADO AL FINAL LLAMANDO AL NUEVO METODO

            echo "<table class='table'>
                    <thead>
                        <tr>
                            <th>  COD. BARRA </th>
                            <th>  NOMBRE     </th>
                            <th>  FOTO       </th>
                        </tr> 
                    </thead>";   	

                foreach ($ArrayDeProductos as $prod){

                    echo " 	<tr>
                                <td>".$prod->GetCodBarra()."</td>
                                <td>".$prod->GetNombre()."</td>
                                <td><img src='archivos/".$prod->GetPathFoto()."' width='100px' height='100px'/></td>
                            </tr>";
                }	
            echo "</table>";		
            ?>
		</div>
	</div>
</body>
</html>