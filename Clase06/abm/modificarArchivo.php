
<?PHP
    require "clases/producto.php";
    $producto = new Producto($_POST["codBarra"] ,$_POST["nombre"], $_FILES["archivo"]["name"]);
    //Abro el archivo para sobreescribir
    $i = $_POST["posicionArray"];
    $archivo = "productos.txt"; 
    $abrir = fopen($archivo, 'r+'); 
    $contenido = fread($abrir, filesize($archivo));
    fclose($abrir); 

    //Guardo el contenido en un array
    $contenido2 = explode("\r\n", $contenido);
    //Veo la variable que quiero modificar, en este caso el numero 
    //El numero lo obtuve del foreach anterior
    $variable1 = explode("-", $contenido2[$i]);
    //devolvemos el valor a la linea   
    $variable1[0] = $_POST["codBarra"]; //codProducto
    $variable1[1] = $_POST["nombre"];   //nombreProducto
    $variable1[2] = $_FILES["archivo"]["name"]; //nombreArchivo
    $variable1 = implode(" - ", $variable1); 
    //Reemplazo la linea entera con el nuevo valor     
    $contenido2[$i] = "$variable1";
    //Dejo en nuevo toda la modificacion entera
    $nuevo = implode("\r\n", $contenido2);     
    $abrir = fopen($archivo, 'w'); 
    fwrite($abrir, $nuevo); 
    fclose($abrir); 
    
    //Muevo el archivo
    $name = $_FILES["archivo"]["name"];
    $archivoTmp = $_FILES["archivo"]["tmp_name"];
    copy($archivoTmp,"archivos"."/".$name);
        //  }
    //    else 
    //    {
    //       if ($_FILES["VArchivo"]["error"] > 0) 
    //       {
    //         echo $_FILES["VArchivo"]["error"] . "";
    //       } 
    //       else 
    //       {
    //         echo "Archivo no permitido";
    //       }
    echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/Programacion3-2017/Clase06/abm/formmodificacionARCHIVO.php" />'

?>
