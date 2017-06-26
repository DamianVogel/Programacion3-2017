<?php
//Incluimos la clase AccesoDatos.php que no estaba. La copiamos desde la Carpeta Clases de Clase06

class Bicicleta
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $Color;
 	private $Rodado;
  	private $Marca;

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function GetColor()
	{
		return $this->Color;
	}
	public function GetRodado()
	{
		return $this->Rodado;
	}
	public function GetMarca()
	{
		return $this->Marca;
	}



	public function SetColor($valor)
	{
		$this->Color = $valor;
	}
	public function SetRodado($valor)
	{
		$this->Rodado = $valor;
	}
	public function SetMarca($valor)
	{
		$this->Marca = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct( $Color=NULL, $Rodado=NULL, $Marca=NULL)
	{
        	$this->Color = $Color;
			$this->Rodado = $Rodado;
			$this->Marca = $Marca;
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->Color." - ".$this->Rodado." - ".$this->Marca."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE


	//PARCIAL
	public static function altabicicleta($color,$rodado,$marca)
	{
        
            $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
			$consulta = $objetoAcceso->RetornarConsulta('INSERT INTO `bicicletas`(`color`, `rodado`, `marca`) VALUES (:color,:rodado,:marca)');
            $consulta->bindParam("color",$color);
            $consulta->bindParam("rodado",$rodado);
            $consulta->bindParam("marca",$marca);
            $consulta->execute();    
            $uno= $consulta->fetchAll();

	        $rta['respuesta'] = "INSERT OK";
    
            
            
		return $rta;
	}

	public static function traertodaslasbicis()
	{
		$arrayRetorno = array();
		$objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('SELECT `color`, `rodado`, `marca`  FROM `bicicletas` ');
		$consulta->Execute();
		while ($fila = $consulta->fetchObject("Bicicleta"))
		{
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
	}

	
	public static function traerbicicolor($aux)
    {
        $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
        $consulta = $objetoAcceso->RetornarConsulta('SELECT `color`, `rodado`, `marca`  FROM `bicicletas` WHERE color=:color');
        $consulta->bindParam("color", $aux);
        $consulta->execute();
        $uno = $consulta->fetchAll();
         if($uno == NULL)
          {
              $uno=0;
              return $uno;
          }
		  else 
		  {
				return $uno;
		  }
        
    }

		public static function traerunabici($aux)
    {
        $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
        $consulta = $objetoAcceso->RetornarConsulta('SELECT `color`, `rodado`, `marca`  FROM `bicicletas` WHERE id_bicicleta=:id');
        $consulta->bindParam("id", $aux);
        $consulta->execute();
        $uno = $consulta->fetchAll();
         if($uno == NULL)
          {
              $uno=0;
              return $uno;
          }
		  else 
		  {
				return $uno;
		  }
        
    }

	public static function borrarbici($aux)
    {
        $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
        $consulta = $objetoAcceso->RetornarConsulta('DELETE FROM `bicicletas` WHERE id_bicicleta=:id');
        $consulta->bindParam("id", $aux);
        $consulta->execute();
        $uno = $consulta->fetchAll();
         if($uno == NULL)
          {
              $uno="Bici Eliminada";
              return $uno;
          }
		  else 
		  {
				return $uno;
		  }
        
    }
}

