
<?php
	session_start();
	try{
		$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error en la conexión: ".$e->getMessage(); 
	}
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);


	try{
		$consultaSQL = "SELECT usuario, permisos FROM usuario WHERE usuario=:usuario AND password=:password";
		$res = $conexion->prepare($consultaSQL);
		$res->bindValue(":usuario", $user, PDO::PARAM_STR);
		$res->bindValue(":password", $pass, PDO::PARAM_STR);
		$res->execute();
		$row = $res->fetch();

		$_SESSION['usuario']= $row['usuario'] ;
		$_SESSION['permisos']= $row['permisos'] ;
	}catch(PDOException $e){
		echo "Error en la inserción: ".$e->getMessage(); 
	}

	if(isset($_SESSION['usuario'])){
		echo "Hola ".$_SESSION['usuario'].". Bienvenido";
		echo "<br>";
		echo "
		<p>Gracias por loguearse.</p>
		<a href=\"../index.php\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '../index.php'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
	}else{


	echo "
		<p>Usuario o contraseña incorrectos.</p>
		<a href=\"../index.php\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '../index.php'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
	}
		$conexion=null;
?>

