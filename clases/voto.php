<?php

class Voto
{
	public $id;
	public $dni;
	public $sexo;
	public $candidato;
	public $provincia;
	
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
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into cds (titel,interpret,jahr)values(:titulo,:cantante,:anio)");
				$consulta->bindValue(':titulo',$this->titulo, PDO::PARAM_INT);
				$consulta->bindValue(':anio', $this->año, PDO::PARAM_STR);
				$consulta->bindValue(':cantante', $this->cantante, PDO::PARAM_STR);
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


}

?>