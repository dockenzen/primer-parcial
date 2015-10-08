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
}

?>