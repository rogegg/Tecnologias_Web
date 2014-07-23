<?php
session_start(); 
	try{
		$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error en la conexión: ".$e->getMessage(); 
	}
	

	$url = $_POST['url'];
	date_default_timezone_set("Europe/Madrid");
	$hora = date("H:i");
	$fecha = date("d/j/Y");
	$nombre = $_SESSION['usuario'];
	$texto = $_POST['comment'];


	try{
		$consultaSQL = "INSERT INTO comentario VALUES (\"\", :hora, :fecha, :nombre, :texto)";
		 //PDO::FB_ATTR_TIME_FORMAT
		 $st = $conexion->prepare($consultaSQL);
		 $st->bindValue(":hora", $hora, PDO::PARAM_STR);
		 $st->bindValue(":fecha", $fecha, PDO::PARAM_STR);
		 $st->bindValue(":nombre",$nombre, PDO::PARAM_STR);
		 $st->bindValue(":texto", $texto, PDO::PARAM_STR);
		//$st->bindValue(":texto", $_POST['apellidos'], PDO::PARAM_STR);
		
		 $st->execute();
	}catch(PDOException $e){
		echo "Error en la inserción: ".$e->getMessage(); 
	}
	$conexion=null;
	echo "
		<p>Redirigiendo...</p>
		<a href=\"".$url."\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '".$url."'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
		
?>

