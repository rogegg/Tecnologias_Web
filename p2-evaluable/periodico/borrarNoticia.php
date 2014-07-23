<!doctype html>
<?php session_start(); 
	#evitamos poder entrar directamente sin permisos ni login
	if( (isset($_SESSION['usuario'])) && ($_SESSION['permisos']=="1") ) {
	}else{
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://bahia.ugr.es/~76423766/periodicoII/index.php">';
	}

?>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js/funciones.js"></script>
		<title> Periódico </title>
    </head>
	<body>
		<aside id="adLeft">
			<a href="http://www.samsung.com/global/microsite/galaxys5/">
				<img src="img/samsunggalaxys5_l.jpg" alt="Publicidad izquierda">
			</a>
		</aside>
			
		<aside id="adRight">
			<a href="http://www.samsung.com/global/microsite/galaxys5/">
				<img src="img/samsunggalaxys5_r.jpg" alt="Publicidad derecha">
			</a>
		</aside>

		<section class="advertising">
			<header id="adTop">
				<a href="http://www.samsung.com/global/microsite/galaxys5/">
					<img src="img/samsunggalaxys5_top.jpg" alt="Publcidad arriba">
				</a>
			</header>		
			<section class="bodyPage">
				<header>
					<a href="index.html">
						<h1>El Periódico</h1>
					</a>
					<hr>
				</header>

				<section class="columnRight">
					<section id="container">
						<h1>Administración de noticias</h1>
						 	 <a href="administracion.php"><button type="button">Administración</button></a>
					         <form action="php/borrar_noticia.php" method="post"  onsubmit="return validarBorrarNoticia()">
				            	<section class="form">
				            		<h1> Borrar Noticia </h1><br>
				            		<input id="id" type="text" name="id" placeholder="Id de la noticia a borrar" >
				            		<label>- ó -</label>
				            		<input id="titulo" type="text" name="titulo" placeholder="Título de la noticia">
									
									<input class="submit" type="submit" group="1" name="submit" value="Borrar noticia" />
			 						<input class="reset" type="reset" group="1" name="reset" value="Resetear"/>
				               </section>
	    			  		 </form>
					</section>
				</section>

				
				<footer>
					<h2>El Periódico</h2>
					<section id="description">
						<h3>Encuentranos en:</h3>
						<p>C\ Jacinto Benavente nº 16</p>
						<p>18620 &nbsp Alhendín (Granada)</p>
						<p>info@elperiodico.es &nbsp&nbsp  +34 958 000 000</p>
					</section>
					<nav>
						<ul>
							<li><a id="" href="index.html">Secciones</a></li>
							<li><a id="" href=".html">Contacto</a></li>
							<li><a id="" href="suscripcion.html">Suscripción</a></li>				
							<li><a id="navEnd" href="como_se_hizo.pdf">Cómo se hizo</a></li>		
						</ul>
					</nav>
				</footer>	
			</section>

		</section>
	</body>
</html>