<?php

session_start();

if(isset($_SESSION["usuario"]))
{
    echo "Bienvenido ".$_SESSION["usuario"]."<br>";
    echo "<button onclick='Salir()'>Salir</button>";
    setcookie("usuario",$_SESSION["usuario"],time()+3000,"/");
}
else
{
    echo "no tiene permisos";
}

?>