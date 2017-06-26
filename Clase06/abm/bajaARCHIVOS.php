<?PHP
require_once("clases/producto.php");
try
{

       $arrayArchivo = Producto::TraerTodosLosProductos();
        //separamos la primera variable de la fila 3
        $i = 0;
        $loencontro=false;
        foreach ($arrayArchivo as $prod)
        {
            if($_POST["codBarra"] == $prod->GetCodBarra())
            {
            //CREO FLAG POR SI LO ENCONTRO
            $loencontro=true;
            break;
            }
         
        $i++;
        }
        //Abro el archivo para sobreescribir
        $archivo = "productos.txt";
        $abrir = fopen($archivo, 'w');
        //Borro el archivo con el indice $i que saque en el foreach
        unset($arrayArchivo[$i]);
        //reindexo el array.
        $reindex=array_values($arrayArchivo);
        $arrayArchivo=$reindex;
        //recorro el array para guardarlo en el txt
        foreach ($arrayArchivo as $key) {
            
            fwrite($abrir,$key->ToString());
            
        }
        
        fclose($abrir);
     
        if($loencontro)
        {
            //creo el mensaje y la redireccion si encontró el archivo
        echo '<script type="text/javascript">alert("Se borro 1 articulo");</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/Programacion3-2017/Clase06/abm/formbajaARCHIVOS.php" />';

        }
        else 
        {
               //creo lo contrario al if
        echo '<script type="text/javascript">alert("No se encontró el articulo");</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/Programacion3-2017/Clase06/abm/formbajaARCHIVOS.php" />';
        }
        }

catch (PDOException $e)
    {
        echo $e->getMessage();
        require "formbajaARCHIVOS.php";
    }