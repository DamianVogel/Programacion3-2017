<?PHP
    require_once "clases/AccesoDatos.php";
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();

    $consulta = $objetoAcceso->RetornarConsulta('UPDATE producto SET codigo_barra= :codBarra, nombre= :nombre, path_foto = :pathFoto WHERE codigo_barra=:codAnterior');

    $consulta->bindvalue(":codAnterior", $_POST["codAnterior"],PDO::PARAM_INT);
    $consulta->bindvalue(':codBarra',$_POST["codBarra"], PDO::PARAM_INT);
    $consulta->bindvalue(':nombre',$_POST["nombre"], PDO::PARAM_STR);
    $consulta->bindvalue(':pathFoto',$_FILES["archivo"]["name"], PDO::PARAM_STR);
    $consulta->execute();

    $name = $_FILES["archivo"]["name"];
    $archivoTmp = $_FILES["archivo"]["tmp_name"];
    copy($archivoTmp,"archivos"."/".$name);
              
    echo "Se actualizo ". $consulta->rowCount() . "registro/s";
    
    echo '<meta http-equiv="refresh" content="0; url=http://localhost:8080/Programacion3-2017/Clase06/abm/formmodificacionBD.php" />'

?>