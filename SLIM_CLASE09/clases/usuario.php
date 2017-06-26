<?php

require 'AccesoDatos.php';

class Usuario
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $id;
 	private $mail;
  	private $estado;
    private $clave;
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function Getid()	{return $this->id;}
	public function Getmail() {return $this->mail;  }
	public function Getestado()	{return $this->estado;}
    public function GetClave()	{return $this->clave;}

	public function Setid($valor){$this->id = $valor;}
	public function Setmail($valor)  {$this->mail = $valor;}
	public function Setestado($valor){$this->estado = $valor;}
    public function SetClave($valor){$this->clave = $valor;} 
//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($id=NULL, $mail=NULL, $estado=NULL, $clave=NULL)
	{
			$this->id = $id;
			$this->mail = $mail;
			$this->estado = $estado;
            $this->clave = $clave;
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{return $this->Getid()." - ".$this->Getmail()." - ".$this->Getestado()." - ".$this->GetClave()."\r\n";}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE

	public static function TraerTodosLosUsuarios()
	{

		$ListaDeUsuariosLeidos = array();

	
		
		return $ListaDeUsuariosLeidos;
	    
	}

	public static function TraerTodosLosUsuarios()
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