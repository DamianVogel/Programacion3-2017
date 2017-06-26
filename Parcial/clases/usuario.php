<?php
//Incluimos la clase AccesoDatos.php que no estaba. La copiamos desde la Carpeta Clases de Clase06

class Usuario
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $Nombre;
 	private $Mail;
  	private $Clave;
	private $Foto;
    private $Tipo;
//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
	public function GetNombre()
	{
		return $this->Nombre;
	}
	public function GetMail()
	{
		return $this->Mail;
	}
	public function GetClave()
	{
		return $this->Clave;
	}
	public function GetTipo()
	{
		return $this->Tipo;
	}
	public function GetFoto()
	{
		return $this->Foto;
	}


	public function SetNombre($valor)
	{
		$this->Nombre = $valor;
	}
	public function SetMail($valor)
	{
		$this->Mail = $valor;
	}
	public function SetClave($valor)
	{
		$this->Clave = $valor;
	}
	public function SetTipo($valor)
	{
		$this->Tipo = $valor;
	}
	public function SetFoto($valor)
	{
		$this->Foto = $valor;
	}


//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct( $Nombre=NULL, $Mail=NULL, $Clave=NULL, $Tipo=NULL, $Foto=NULL)
	{
        	$this->Nombre = $Nombre;
			$this->Mail = $Mail;
			$this->Clave = $Clave;
			$this->Tipo = $Tipo;
			$this->Foto = $Foto;
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->Nombre." - ".$this->Mail." - ".$this->Clave."\r\n";
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODOS DE CLASE


	//PARCIAL
	public static function validarUsuario($nombre,$mail,$clave)
	{
        
            $objetoAcceso = AccesoDatos::DameUnObjetoAcceso();
            $consulta = $objetoAcceso->RetornarConsulta('SELECT perfil FROM usuarios WHERE nombre=:nombre AND mail=:mail AND clave=:clave');
            $consulta->bindParam("nombre",$nombre);
            $consulta->bindParam("mail",$mail);
            $consulta->bindParam("clave",$clave);
            $consulta->execute();    
            $uno= $consulta->fetchAll();

            if($uno == TRUE)
            {
                $rta['respuesta'] = "OK";
                $rta['perfil'] = $uno[0]["perfil"];
			}
            else if($uno == NULL )
            {
                $rta['respuesta'] = "NOK";
                $rta['perfil'] = NULL;          
            }
            
		return $rta;
	}


//--------------------------------------------------------------------------------//
}