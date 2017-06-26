<?PHP
    require_once "clases/AccesoDatos.php";
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $objetoAcceso->RetornarConsulta('DELETE FROM producto WHERE codigo_barra=:id');

    try 
    {
        $consulta->bindvalue(':id',$_POST["codBarra"], PDO::PARAM_INT);
        $consulta->execute();
        if ($consulta->rowCount() == 0)
        {
            echo "El elemento no existe"."<br>";    
            require_once "baja.php";
        }
        else 
        {
            echo '<script type="text/javascript">alert("Se elimino 1 articulo");</script>';
            if (isset($_POST["botonEliminar1"]))
            {
                require_once "grilla.php";
            }
        }
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
?>