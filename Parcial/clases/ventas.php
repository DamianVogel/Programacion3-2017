<?php
//Incluimos la clase AccesoDatos.php que no estaba. La copiamos desde la Carpeta Clases de Clase06

class Ventas
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $idbicicleta;
 	private $nombrecliente;
  	private $fecha;
	private $precio;

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function Getidbicicleta()
	{
		return $this->idbicicleta;
	}
	public function Getnombrecliente()
	{
		return $this->nombrecliente;
	}
	public function Getfecha()
	{
		return $this->fecha;
	}

	public function GetPrecio()
	{
		return $this->Precio;
	}




	public function Setidbicicleta($valor)
	{
		$this->idbicicleta = $valor;
	}
	public function Setnombrecliente($valor)
	{
		$this->nombrecliente = $valor;
	}
	public function Setfecha($valor)
	{
		$this->fecha = $valor;
	}
		public function Setprecio($valor)
	{
		$this->precio = $valor;
	}

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct( $idbicicleta=NULL, $nombrecliente=NULL, $fecha=NULL, $precio=NULL)
	{
        	$this->idbicicleta = $idbicicleta;
			$this->nombrecliente = $nombrecliente;
			$this->fecha = $fecha;
			$this->precio = $precio;
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->idbicicleta." - ".$this->nombrecliente." - ".$this->fecha."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE


	//PARCIAL
	public static function altaventa($nombrecliente,$fecha,$precio,$foto)
	{
        
            $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
			$consulta = $objetoAcceso->RetornarConsulta('INSERT INTO `ventas`(`nombrecliente`, `fecha`, `precio`, `foto`) VALUES (:nombrecliente,:fecha,:precio,:foto)');
            $consulta->bindParam("nombrecliente",$nombrecliente);
            $consulta->bindParam("fecha",$fecha);
			$consulta->bindParam("precio",$precio);
			$consulta->bindParam("foto",$foto);
            $consulta->execute();    
            $uno= $consulta->fetchAll();

	        $rta['respuesta'] = "INSERT OK";

		return $rta;
	}

}
