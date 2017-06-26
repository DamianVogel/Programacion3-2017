<?PHP
    require_once "clases/AccesoDatos.php";
    require_once "clases/producto.php";

    $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $objetoAcceso->RetornarConsulta('SELECT codigo_barra as codBarra, nombre, path_foto as pathFoto FROM producto WHERE codigo_barra=:codBarra');

    $consulta->bindvalue(':codBarra', $_POST["codBarra"], PDO::PARAM_INT);

    $consulta->execute();

    $productoSeleccionado=  $consulta->fetchObject("producto");
    $nombreProducto = $productoSeleccionado->GetNombre();
    $codProducto = $productoSeleccionado->GetCodBarra();
    $pathFotoProducto = $productoSeleccionado->GetPathFoto();
    
    require_once "modificacion.php";
?>