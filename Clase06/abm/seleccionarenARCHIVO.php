<?PHP
    require_once "clases/producto.php";

    $arrayArchivo = Producto::TraerTodosLosProductos();
    //separamos la primera variable    de la fila 3     
    $i = 0;
    $existeProducto = 0;
    foreach ($arrayArchivo as $prod)
    {   
        
        // $codComp = $prod["codBarra"];
        if($_POST["codBarra"] == $prod->GetCodBarra())
        {
            $existeProducto = 1;
            break;
        }   
        $i++;
    }  

    $posicionArray      = $i;
    $codProducto        = $prod->GetCodBarra();
    $nombreProducto     = $prod->GetNombre();
    $pathFotoProducto   = $prod->GetPathFoto(); 
    require_once "formmodificacionArchivo.php";

?>