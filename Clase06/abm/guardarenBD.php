<?PHP
    require_once "clases/AccesoDatos.php";

    if (isset($_POST["guardar"]))
    {

        try
        {
            $_objetoAcceso = AccesoDatos::DameUnObjetoAcceso();

            $consulta = $_objetoAcceso->RetornarConsulta(
            'INSERT INTO producto (codigo_barra,nombre,path_foto)
            VALUES(:codBarra,:nombre,:archivo)');

            $consulta->bindvalue(':codBarra', $_POST["codBarra"],PDO::PARAM_INT );
            $consulta->bindvalue(':nombre', $_POST["nombre"],PDO::PARAM_STR );
            $consulta->bindvalue(':archivo', $_FILES["archivo"]["name"],PDO::PARAM_STR );
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