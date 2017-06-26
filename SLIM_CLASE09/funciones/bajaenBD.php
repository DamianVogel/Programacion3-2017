<?PHP
    require_once "clases/AccesoDatos.php";
    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $objetoAcceso->RetornarConsulta('DELETE FROM conteiner WHERE numero=:id');

    try 
    {
        $consulta->bindvalue(':id',$_POST["numeroCont"], PDO::PARAM_INT);
        $consulta->execute();
        if ($consulta->rowCount() == 0)
        {
             echo '<script type="text/javascript">alert("El Elemento no existe");</script>';
        }
        else 
        {
            echo '<script type="text/javascript">alert("Se elimino 1 articulo");</script>';
        }
        require_once "ListadoContainer.php";
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
?>