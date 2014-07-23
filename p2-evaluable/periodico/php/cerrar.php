
<?php
	session_start();
	$_SESSION['usuario']=NULL;
	$_SESSION['permisos']=NULL;
	echo "
		<p>Cerrando su sesión.</p>
		<a href=\"../index.php\">Pulsa aquí para redirigir ahora.</a>
		<script type=\"text/javascript\">
			var time = 1500
			var dir = '../index.php'
			window.setTimeout(\"window.location.replace(dir);\",time);
		</script>";
?>

