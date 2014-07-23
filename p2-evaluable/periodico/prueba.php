<?php
	$dsn = "mysql: host=bahia.ugr.es; dbname=76423766";
	$usuario = "76423766";
	$pass = "76423766x";
	try{
		$conexion = new PDO($dsn, $usuario, $pass);
		$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error en la conexión: " . $e->getMessage(); 
	}
		$consultaSQL = "SELECT * FROM noticia";
		$resultados = $conexion->query($consultaSQL);
		foreach ($resultados as $fila) {
			echo"Titulo= ".$fila["titulo"]."<br/>";
			echo"Texto= ".$fila["texto"]."<br/>";
		}

?>