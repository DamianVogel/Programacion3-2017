<?php
session_start();//no puede haber nada arriba del session_start

$usuario=$_POST["mail"];
$clave=$_POST["clave"];
$retorno;


   
if($usuario=="admin@admin"&&$clave==333)
{
    $retorno="esta logeado";
    $_SESSION["usuario"]=$usuario;
}
else{
    $retorno="no esta logueado";
}

echo $retorno;

?>