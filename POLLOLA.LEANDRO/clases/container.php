<?php

class Container
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $numero;
 	private $descripcion;
  	private $pais;
    private $foto;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function Getnumero()	{return $this->numero;}
	public function Getdescripcion() {return $this->descripcion;  }
	public function Getpais()	{return $this->pais;}
    public function Getfoto()	{return $this->foto;}

	public function Setnumero($valor){$this->numero = $valor;}
	public function Setdescripcion($valor)  {$this->descripcion = $valor;}
	public function Setpais($valor){$this->pais = $valor;}
    public function Setfoto($valor){$this->foto = $valor;} 
//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{return $this->Getnumero()." - ".$this->Getdescripcion()." - ".$this->Getpais()." - ".$this->Getfoto()."\r\n";}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE

	public static function TraerTodosLosContainer()
	{

		$arrayRetorno = array();

		$_objetoAcceso = AccesoDatos::DameUnObjetoAcceso(); 
		$consulta = $_objetoAcceso->RetornarConsulta("SELECT numero , descripcion, pais, foto FROM conteiner"); 
		$consulta->execute();

		 while ($fila = $consulta->fetchObject("Container")) 
		 {
			 array_push($arrayRetorno,$fila);
		 }
		 
		 return $arrayRetorno;
	}

	
}