<?php 
//session_start();
//if(isset($_SESSION['registrado']))
//{
	require_once("clases/AccesoDatos.php");
	require_once("clases/voto.php");
	$arrayDeVotos=voto::TraerTodoLosVotos();
//	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>id</th><th>dni</th><th>presidente</th><th>sexo</th><th>provincia</th><th>localidad</th>
			<th>direccion</th>
		</tr>
	</thead>
	<tbody>

		<?php 

		

foreach ($arrayDeVotos as $voto) {
	$variable =  "\"".$voto->provincia."\",\"".$voto->direccion."\",\"".$voto->localidad."\",\"".$voto->id."\"";
	echo"<tr>
			<td><a onclick='EditarVoto($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarVoto($voto->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$voto->id</td>
			<td>$voto->dni</td>
			<td>$voto->presidente</td>
			<td>$voto->sexo</td>
			<td>$voto->provincia</td>
			<td>$voto->localidad</td>
			<td>$voto->direccion</td>
			<td><a onclick='VerEnMapa($variable)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Mostrar Mapa</a></td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<!--
<?php 	
//}
//else{
		//echo "<h4 class='widgettitle'>No estas registrado</h4>";
//	}

	 ?>-->