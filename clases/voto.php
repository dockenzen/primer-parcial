<?php

class Voto
{
	public $id;
	public $dni;
	public $sexo;
	public $presidente;
	public $provincia;
	public $localidad;
	public $direccion;
	
	function __construct()
	{
		
	}

	 public function ModificarCdParametros()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update cds 
				set titel=:titulo,
				interpret=:cantante,
				jahr=:anio
				WHERE id=:id");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':titulo',$this->titulo, PDO::PARAM_INT);
			$consulta->bindValue(':anio', $this->año, PDO::PARAM_STR);
			$consulta->bindValue(':cantante', $this->cantante, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	 public function InsertarElVotoParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarVoto(:direccion,:dni,:id,:localidad,:presidente,:provincia,:sexo)");
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
				$consulta->bindValue(':dni',$this->dni, PDO::PARAM_INT);
				$consulta->bindValue(':direccion', $this->direccion, PDO::PARAM_STR);
				$consulta->bindValue(':localidad', $this->localidad, PDO::PARAM_STR);
				$consulta->bindValue(':presidente', $this->presidente, PDO::PARAM_STR);
				$consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 public function GuardarVoto()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarCdParametros();
	 		}else {
	 			$this->InsertarElVotoParametros();
	 		}

	 }
	 public static function TraerTodoLosVotos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodo()");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "voto");		
	}


}

?>