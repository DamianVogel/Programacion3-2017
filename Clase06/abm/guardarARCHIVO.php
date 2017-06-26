
<?PHP
    require "clases/producto.php";
    
    // if( trim($_POST["VNombre"])=='' || 
    //     trim($_POST["VApellido"])=='' || 
    //     trim($_POST["VDNI"])=='' || 
    //     trim($_POST["VSexo"])==''  || 
    //     trim($_POST["VLegajo"])==''  || 
    //     trim($_POST["VSueldo"])==''  
    //     || trim($_FILES["VArchivo"]["name"])==''
    //   )
    // {
    //      echo "Todos los datos son obligatorios.\r\n";
    //      echo '<a href="index.html"> Volver a Ingresar</a>';
    // }
    // else 
    // {
    //   if 
    //   (
    //       (
    //           ($_FILES["VArchivo"]["type"] == "image/jpg") ||
    //             ($_FILES["VArchivo"]["type"] == "image/bmp") ||
    //             ($_FILES["VArchivo"]["type"] == "image/gif") ||
    //             ($_FILES["VArchivo"]["type"] == "image/png") ||
    //             ($_FILES["VArchivo"]["type"] == "image/jpeg")
    //       ) 
    //       && ($_FILES["VArchivo"]["size"] < 1000000)
    //       && !file_exists("fotos/". $_FILES["VArchivo"]["name"])
    //   ) 
        // {
            //Instancio el empleado 
            $producto = new Producto($_POST["codBarra"] ,$_POST["nombre"], $_FILES["archivo"]["name"]);

            if (!file_exists("productos.txt"))
                {
                    $archivoProductos= fopen("productos.txt","w");
                    fwrite($archivoProductos, $producto->ToString());
                    echo "Se creo el archivo y  se guardo el producto";
                    echo '<a href="grillaArchivos.php">Mostrar</a>';
                }
            else 
                {
                    $archivoProductos= fopen("productos.txt","a");
                    fwrite($archivoProductos, $producto->ToString());
                    echo "El producto se agrego correctamente";
                    echo '<a href="grillaArchivos.php"><br> Mostrar<br></a>';
                }
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
?>
