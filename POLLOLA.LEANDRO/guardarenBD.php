<?PHP
    require_once "clases/AccesoDatos.php";

    if (isset($_POST["guardar"]))
    {

        try
        {
            $_objetoAcceso = AccesoDatos::DameUnObjetoAcceso();

            $consulta = $_objetoAcceso->RetornarConsulta(
            'INSERT INTO conteiner (numero,descripcion,pais,foto)
            VALUES(:numero,:descripcion,:pais,:foto)');

            $consulta->bindvalue(':numero', $_POST["numeroCont"],PDO::PARAM_INT );
            $consulta->bindvalue(':descripcion', $_POST["descCont"],PDO::PARAM_STR );
            $consulta->bindvalue(':pais', $_POST["paisCont"],PDO::PARAM_STR );
            $consulta->bindvalue(':foto', $_FILES["archivo"]["name"],PDO::PARAM_STR );
            $consulta->execute();
            //Muevo el archivo
            $name = $_FILES["archivo"]["name"];
            $archivoTmp = $_FILES["archivo"]["tmp_name"];
            copy($archivoTmp,"archivos"."/".$name);
              
            echo "Elemento insertado";
            echo "<a href=index.html>Volver</a> ";
        }
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
   
    }



?>