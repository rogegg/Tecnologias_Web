
<?php
	try{
		$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error en la conexión: ".$e->getMessage(); 
	}
	$user = $_POST['usuario'];
	

	try{
		$consultaSQL = "INSERT INTO usuario VALUES ( :usuario, :contra ,\"0\" , :nombre, :apellidos, :email, :fnacimiento, :telefono )";

		 $st = $conexion->prepare($consultaSQL);
		 $st->bindValue(":usuario", $_POST['usuario'], PDO::PARAM_STR);
		 $st->bindValue(":contra", md5($_POST['password']), PDO::PARAM_STR);
		 $st->bindValue(":nombre", $_POST['nombre'], PDO::PARAM_STR);
		 $st->bindValue(":apellidos", $_POST['apellidos'], PDO::PARAM_STR);
		 $st->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
		 $st->bindValue(":fnacimiento", $_POST['fnacimiento'], PDO::PARAM_STR);
		 $st->bindValue(":telefono", $_POST['telefono'], PDO::PARAM_STR);
		 $st->execute();
	}catch(PDOException $e){
		echo "Error en la inserción: ".$e->getMessage(); 
	}
	$conexion=null;
	echo "
		<p>Redirigiendo...</p>
		<a href=\"../index.php\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '../index.php'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";



?>


