
<?php
	try{
		$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error en la conexión: ".$e->getMessage(); 
	}

	$tituloOriginal = $_POST['tituloOriginal'];
	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	$url = $_POST['url'];
	//echo"hora= ".$hora."<br/>";
	//echo"fecha= ".$fecha."<br/>";
	//echo"Nombre= ".$nombre."<br/>";
	//echo"texto= ".$texto."<br/>";

	try{
		#$consultaSQL = "UPDATE noticia SET titulo=\":titulo\",texto=\":texto\" WHERE titulo=".$titulo.;
		$consultaSQL = "UPDATE noticia SET titulo=:titulo, texto=:texto WHERE titulo=:tituloOriginal";
		#UPDATE `noticia` SET `titulo`=":titulo",`texto`=":texto", `url`=":url" WHERE `titulo`="Noticia 3";

		 $st = $conexion->prepare($consultaSQL);
		 $st->bindValue(":tituloOriginal", $tituloOriginal, PDO::PARAM_STR);
		 $st->bindValue(":titulo", $titulo, PDO::PARAM_STR);
		 $st->bindValue(":texto", $texto, PDO::PARAM_STR);
		 #$st->bindValue(":url", $url, PDO::PARAM_STR);
		 
		//$st->bindValue(":texto", $_POST['apellidos'], PDO::PARAM_STR);
		
		 $st->execute();
	}catch(PDOException $e){
		echo "Error en la inserción: ".$e->getMessage(); 
	}
	$conexion=null;
	if($url == null){	$url = "../index.php";}		
	echo "
		<p>Redirigiendo...</p>	
		<a href=\"".$url."\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '".$url."'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
	
?>

