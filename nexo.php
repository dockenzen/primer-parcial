<?php

require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];
switch ($queHago) 
{
	case 'MostrarLogin':
		include "partes/formLogin.php";
		break;
	case 'MostrarFormVoto':
		include "partes/formVoto.php";
			break;
	case 'GuardarVoto':
		$voto = new voto();
		$voto->provincia = $_POST["provincia"];
		$voto->candidato = $_POST["presidente"];
		$voto->direccion = $_POST["direccion"];
		$voto->localidad = $_POST["localidad"];
		$voto->sexo = $_POST["sexo"];
		$voto->dni = $_POST["dni"];
		$voto->GuardarVoto();
		break;
	case 'MostrarFormGrilla':
		include 'partes/formGrilla.php';
			break;

	case 'VerEnMapa':
			include 'partes/formMapa.php';
		break;
}

?>
