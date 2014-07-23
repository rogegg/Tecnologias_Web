<!doctype html>
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
					<nav>
						<ul>
						<li><a id="internacional" href="internacional.html">Internacional</a></li>
						<li><a id="politica" href="politica.html">Política</a></li>
						<li><a id="economia" href="economia.html">Economía</a></li>
						<li><a id="cultura" href="cultura.html">Cultura</a></li>
						</ul>
					</nav>
				</header>


		

				<section class="columnRight">
					<section id="container">
					         <form action="php/registrar.php" method="post" onsubmit="return validarRegistro()">
				               <h3>Registrese como lector</h3>

				            	<section class="form">

				            		<label for="usuario">Usuario</label>
									<input id="usuario" type="text" name="usuario" placeholder="Nombre de usuario" required="yes">
					            	<label for="password">Contraseña:</label>
									<input type="password" id="password" name="password" required="yes"/>
									<label for="nombre">Nombre</label>
									<input id="nombre" type="text" name="nombre" placeholder="Nombre" required="yes">
									<label for="apellidos">Apellidos:</label>
									<input id="apellidos" type="text" name="apellidos" placeholder="Apellidos"/>
									<br>
									<label for="email">Email:</label>
									<input id="email" type="email" name="email" placeholder="ejemplo@correo.com" />

									<label for="fnacimiento">Fecha de nacimiento:</label>
									<input id="fnacimiento" type="date" name="fnacimiento" placeholder="Fecha de nacimiento"/>
									<label for="telefono">Teléfono</label>
									<input type="tel" id="telefono" name="telefono" placeholder="Escriba su teléfono">

									<input class="submit" type="submit" group="1" name="submit" value="Enviar datos" />
			 						<input class="reset" type="reset" group="1" name="reset" value="Resetear datos"/>

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