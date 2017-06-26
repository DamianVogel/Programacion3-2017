<?PHP
    require_once "clases/AccesoDatos.php";
    require_once "clases/container.php";

   	$arrayRetorno = array();

	$_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
	$consulta = $_objetoAcceso->RetornarConsulta("SELECT numero , descripcion, pais, foto FROM conteiner WHERE pais=:pais"); 
	$consulta->bindvalue(':pais', $_POST["paisFiltro"],PDO::PARAM_STR );
    $consulta->execute();

	 while ($fila = $consulta->fetchObject("Container")) 
		 {
			 array_push($arrayRetorno,$fila);
		 }
		 
	echo "<table class='table'>
		<thead>
			<tr>
				<th>  Numero </th>
				<th>  Descripcion     </th>
				<th>  Pais       </th>
				<th>  Foto     </th>
			</tr> 
		</thead>";   	

	foreach ($arrayRetorno as $cont){
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