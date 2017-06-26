<?PHP
    require_once "clases/usuario.php";
    
    
    $arrayArchivo = Usuario::TraerTodosLosUsuarios();
    

    $i = 0;
    $existeProducto = 0;
    foreach ($arrayArchivo as $user)
    {   
        if($_POST["nombUsuario"] == $user->GetNombre() || $_POST["passUsuario"] == $user->GetClave()  )
        {
           echo '<script type="text/javascript">alert("Usuario y Password correctos");</script>';
            require_once "Listado.php";  
            break; 
        }   
        else 
        {
          echo '<script type="text/javascript">alert("Usuario o Password inexistente/incorrecto");</script>';
        }
    }  
?>