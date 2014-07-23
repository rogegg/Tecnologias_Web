
<?php
	try{
		$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error en la conexión: ".$e->getMessage(); 
	}

	$id_noticia = $_POST['id'];
	$titulo = $_POST['titulo'];

	//echo"hora= ".$hora."<br/>";
	//echo"fecha= ".$fecha."<br/>";
	//echo"Nombre= ".$nombre."<br/>";
	//echo"texto= ".$texto."<br/>";

	try{
		$consultaSQL = "DELETE FROM `noticia` WHERE (id_noticia = :id_noticia OR titulo = :titulo)";

		 $st = $conexion->prepare($consultaSQL);
		 $st->bindValue(":titulo", $titulo, PDO::PARAM_STR);
		 $st->bindValue(":id_noticia", $id_noticia, PDO::PARAM_STR);
		 
		//$st->bindValue(":texto", $_POST['apellidos'], PDO::PARAM_STR);
		
		 $st->execute();
	}catch(PDOException $e){
		echo "Error en la inserción: ".$e->getMessage(); 
	}
	$conexion=null;
	$url = "../index.php";
	$url_ad = "../administracion.php";
	if($id_noticia==null && $titulo==null){
		echo "
		<p>Debe insertar un id o titulo para borrar la noticia</p>	
		<a href=\"".$url_ad."\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 3000
			var dir = '".$url_ad."'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
	}else{
	echo "
		<p>Noticia borrada</p>	
		<p>Redirigiendo...</p>	
		<a href=\"".$url."\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '".$url."'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
	}
	
?>

