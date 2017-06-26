<?PHP
    require_once "usuario.php";
    
    $usuario = new Usuario ($_POST["nombUsuario"],$_POST["corrUsuario"],$_POST["edadUsuario"],$_POST["passUsuario"]); 
    $archivo = "clases/usuario.txt";
            if (!file_exists($archivo))
                {
                    $archivoUsuarios= fopen($archivo,"w");
                    fwrite($archivoUsuarios, $usuario->ToString());
                    echo "Se creo el archivo y  se guardo el usuario";
                    fclose($archivo);
                    echo '<a href="../index.html"><br> Volver<br></a>';
                }
            else 
                {
                    $archivoUsuarios= fopen($archivo,"a");
                    fwrite($archivoUsuarios, $usuario->ToString());
                    echo "El usuario se agrego correctamente";
                     fclose($archivo);
                    echo '<a href="../index.html"><br> Volver<br></a>';
                }
?>
