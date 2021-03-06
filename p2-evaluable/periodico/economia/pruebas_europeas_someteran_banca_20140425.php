<!doctype html>
<?php session_start(); ?>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<script type="text/javascript" src="../js/funciones.js"></script>
		<title> Periódico </title>
    </head>
	<body>
		<aside id="adLeft">
			<a href="http://www.samsung.com/global/microsite/galaxys5/">
				<img src="../img/samsunggalaxys5_l.jpg" alt="Publicidad izquierda">
			</a>
		</aside>
			
		<aside id="adRight">
			<a href="http://www.samsung.com/global/microsite/galaxys5/">
				<img src="../img/samsunggalaxys5_r.jpg" alt="Publicidad derecha">
			</a>
		</aside>

		<section class="advertising">
			<header id="adTop">
				<a href="http://www.samsung.com/global/microsite/galaxys5/">
					<img src="../img/samsunggalaxys5_top.jpg" alt="Publcidad arriba">
				</a>
			</header>		
			<section class="bodyPage">

				<?php
					if(isset($_SESSION['usuario'])) {
						echo "<p>Bienvenido ".$_SESSION['usuario']."</p>";
						if($_SESSION['permisos']=="1"){
							echo '<a href="../administracion.php"><button type="button">Administración</button></a>';
						}
						echo '<a href="../php/cerrar.php"><button type="button">Cerrar sesión</button></a>';
						
					}else{
						echo'<section id="inicio_sesion">
							<form method="post" action="../php/login.php" onsubmit="return validarLogin()>
								<input class="datos" type="text" id="user" name="user" placeholder="Usuario" required></input>
								<input class="datos" type="password" id="pass" name="pass" placeholder="Contraseña" required></input>
								<input type="submit" name="btn1" value="Entrar">
							</form>

							<a href="../registro.php"><button type="button">Registrarse</button></a>
					
						</section> ';
					}
				?>
				
				<header>
					<a href="../index.php">
						<h1>El Periódico</h1>
					</a>
					<hr>
					<section id="title_section">
						<h1 id="title_economia">Economía</h1>
					</section>
					<nav>
						<ul>
						<li><a id="internacional" href="../internacional.html">Internacional</a></li>
						<li><a id="politica" href="../politica.html">Política</a></li>
						<li><a id="economia" href="../economia.html">Economía</a></li>
						<li><a id="cultura" href="../cultura.html">Cultura</a></li>
						</ul>
					</nav>
				</header>

				<section class="art">

					<article class="artEconomia">
						<a href="../economia/pruebas_europeas_someteran_banca_20140425.php">
							<img src="../economia/pruebas_europeas_someteran_banca/pruebas_europeas_someteran_banca.jpg" 
								 alt="Una empleada vincula a Cascos en la trama Gürtel">
						</a>
						<h2 onmouseover="abrirVentana()"><a id="title_art" href="../economia/pruebas_europeas_someteran_banca_20140425.php">
							Las pruebas europeas someterán a la banca a un escenario extremo
						</a></h2>
						<section id="noticiasRelacionadas" style="display:none;" onmouseover="abrirVentana()"  onmouseout="cerrarVentana()">
							<nav>
								<ul>
								<li><a id="economia" href="electricas_ofrecen_precio_fijo_20140425.html">Las eléctricas ofrecen un precio fijo de la luz</a></li>
								<li><a id="economia" href="cuanto_cuesta_pedir_dinero_20140426.html">¿Cuánto cuesta pedir dinero a un prestamista?</a></li>
								<li><a id="economia" href="fitch_sube_escalon_nota_20140426.html">Fitch sube un escalón la nota de España y la acerca al notable</a></li>
								</ul>
							</nav>
						</section>
						<section class="autor_seccion">
							<section class="autor">
								<h5> Rogelio GG </h5>
							</section>
							<p>&nbsp;||&nbsp;</p>
							<section class="seccion">
								<h5> Economía </h5>
							</section>
						</section>
						<br><hr>
						<section id="artText">
							<p>Los funcionarios de la Unión Europea se preparan para someter a los bancos del bloque al escenario de recesión más duro que se haya aplicado en una prueba de resistencia, según tres fuentes informadas sobre el asunto.</p>

							<p>La Autoridad Bancaria Europea y el Banco Central Europeo presentarán la próxima semana un escenario adverso para las pruebas de resistencia, que comienzan en mayo, que supone que la economía defraude las expectativas por mayor margen que en los exámenes celebrados en 2010 y 2011, dijeron las fuentes, que pidieron no ser identificadas porque los detalles aún no son públicos. Las anteriores pruebas fueron criticadas por no revelar las debilidades de los bancos que luego fracasaron .</p>

							<p>En esta ocasión, el escenario adverso de las pruebas de resistencia se basa en que la evolución del producto interior bruto (PIB) se queda por debajo de las previsiones previsiones de crecimiento de la Comisión Europea en 2,2 puntos porcentuales en 2014; 3,4 puntos en 2015, y 1,4 puntos en 2016, dijeron las fuentes, citando un documento de la EBA. Probablemente eso se traduzca en dos años de recesión seguidas de un crecimiento anémico en el último año cubierto por el ejercicio. La EBA tiene previsto anunciar los detalles en Londres el 29 de abril. Un portavoz de la EBA y una portavoz del BCE declinaron hacer comentarios.</p>

							<h3>La tercera recesión en España</h3>

							<p>[En el caso español, donde la Comisión Europea prevé un crecimiento del 1% para este año y del 1,7% para 2015, ese diferencial implicaría una caída del PIB del 1,2% este año y del 1,7% en 2015. Para 2016 el resultado sería un crecimiento mínimo. Aunque Bruselas revise algo al alza sus previsiones en mayo, pues esas estimaciones  son las que servirán de referencia, el escenario seguirá siendo durísimo e implicaría la tercera recesión de la crisis, con tasas de paro aún muy superiores a las actuales, que ya están en niveles de máximos históricos].</p>

							<p>El BCE tiene en marcha una evaluación de 128 bancos con la que se prepara para asumir la plena supervisión de los bancos de la zona euro en noviembre, tratando de evitar una repetición de la crisis financiera que amenazó con fragmentar el bloque de la moneda única. El examen, que se aplica a los bancos en toda la UE, obliga a los bancos a mantener un mínimo exigido de capital del 5,5% de los activos ponderados por riesgo.</p>

							<h3>Las previsiones de mayo</h3>

							<p>El BCE ha dicho que el escenario base tomará como referencia las previsiones económicas de primavera de la Comisión Europea, que se publicarán en mayo y ofrecerán una previsión para el año 2016 por primera vez. Las previsiones de invierno de la Comisión, que los funcionarios han utilizado antes de que los nuevos números estén disponibles, suponen un crecimiento del 1.5% este año y un 2% en 2015.</p>

							<p>Los reguladores están tratando de evitar las comparaciones con las últimas pruebas de resistencia para toda la UE de 2011, que fueron criticadas por no detectar los problemas en los bancos que luego cayeron. Los exámenes tomaron en cuenta el efecto de una caída de la producción del 0,4% en 2011, o una desviación de 2,1 puntos porcentuales desde una tasa de crecimiento de referencia del 1,7%, seguido por un año de crecimiento estático en 2012 .</p>

							<p>Los escenarios adversos fueron superados por la realidad. La actividad económica cayó un 0,4% en 2012, según datos compilados por Eurostat.</p>

							<h3>Las pruebas de Estados Unidos</h3>

							<p>El ejercicio del BCE y la EBA probablemente también se comparará con una prueba de resistencia realizada recientemente por la Reserva Federal de Estados Unidos, en la que un banco ha suspendido a y otras tres entidades se les advirtió acerca de su planificación de capital. En ese escenario, los tipos de interés y el desempleo aumentaban y los precios de las acciones bajaban . Las autoridades de Estados Unidos pusieron a prueba sus bancos frente a un escenario adverso y otro extremadamente adverso.</p>

							<p>El vicepresidente del BCE, Vítor Constâncio dijo en febrero que el BCE utilizará el resultado de su examen sobre calidad de los activos actualmente en curso, que examina las cuentas de 128 bancos de la zona euro, para mejorar los datos de entrada para la prueba de resistencia, por lo que será más creíble.</p>

							<p>"El objetivo es no haya más dudas sobre los bancos europeos", dijo el 3 de febrero. "El balance de los bancos europeos será totalmente sólido y transparente para todos los inversores". </p>

						</section>
					</article>
			
					<section id="coment">
						<header><h2>Comentarios</h2></header>
						<?php
							try{
								$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
								$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							}catch(PDOException $e){
								echo "Error en la conexión: ".$e->getMessage(); 
							}
							$consultaSQL = "SELECT * FROM comentario ORDER BY id_comentario";
							try{
								$resultados = $conexion->query($consultaSQL);
							}catch(PDOException $e){
								echo "Error en la consulta: ".$e->getMessage(); 
							}
							foreach ($resultados as $fila) {

								echo " 	<article>
											<header><h3>".$fila['usuario'].":</h3>
											<h5>".$fila['hora']." - ".$fila['fecha']."</h5> 
											</header>
											<p>".$fila['texto']."</p>
										</article>";
							}
						?>

					</section>

					<section id="newComent">
						<header><h2>Envíanos tu opinión</h2></header>
						<?php
							if(isset($_SESSION['usuario'])){
								echo '<form action="../php/insertar_comentario.php" method="post" onsubmit="return validarComentario()">
								    	<fieldset>
								    		 <input type="hidden" id="url" name="url" value="../economia/pruebas_europeas_someteran_banca_20140425.php"/>
											 <label for="nombre">Nombre: '.$_SESSION['usuario'].'</label>											 
											 <br>
											 <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Comentario..."></textarea>
											 <br>
											 <input id="submit" type="submit" name="submit" value="Enviar" />
										</fieldset>
									</form>';
							}else{
								echo '<p> Inicie sesión para dejarnos su opinión</p>';
							}
							
						?>
					</section>
				</section>




				<section class="columnRight">


					<section id="newArt">
						<h3> Relacionadas... </h3>
						<a href="../politica/rechaza_demanda_aznar_elpais_20140425.html">
							<article id="new">
								<h4>Rechazada la demanda de Aznar contra EL PAÍS</h4>
								<p>por los sobresueldos. La sentencia sostiene que el expresidente no acreditó que lo cobrado del PP cuando ya estaba en el </p>
							</article>
						</a>
						<hr>
						<a href="../politica/rechaza_demanda_aznar_elpais_20140425.html">
							<article id="new">
								<h4>Rechazada la demanda de Aznar contra EL PAÍS</h4>
								<p>por los sobresueldos. La sentencia sostiene que el expresidente no acreditó que lo cobrado del PP cuando ya estaba en el </p>
							</article>
						</a>
						<hr>
						<a href="../politica/rechaza_demanda_aznar_elpais_20140425.html">
							<article id="new">
								<h4>Rechazada la demanda de Aznar contra EL PAÍS</h4>
								<p>por los sobresueldos. La sentencia sostiene que el expresidente no acreditó que lo cobrado del PP cuando ya estaba en el </p>
							</article>
						</a>
					</section>

					<hr><hr>

					<section id="bodyAd">
						
						<a href="http://www.juegos.com/juego/goodgame-empire">
							<img src="../img/godgame_empire.jpg">
						</a>

						<a href="http://www.amazon.es/b/ref=amb_link_180495467_2?ie=UTF8&node=4368893031&pf_rd_m=A1AT7YVPFBWXBL&pf_rd_s=right-3&pf_rd_r=0CM6YGX0WY3RNN3YDQ61&pf_rd_t=101&pf_rd_p=482330927&pf_rd_i=602357031">	
							<img src="../img/prepara_coche_moto.png">
						</a>
						<a href="http://www.amazon.es/gp/feature.html/ref=amb_link_181085367_2?ie=UTF8&docId=1000714053&pf_rd_m=A1AT7YVPFBWXBL&pf_rd_s=right-csm-3&pf_rd_r=0CM6YGX0WY3RNN3YDQ61&pf_rd_t=101&pf_rd_p=486656047&pf_rd_i=602357031">
							<img src="../img/pack_app_musicales.jpg">
						</a>
						<a href="http://www.amazon.es/gp/feature.html/ref=o_disp_euhouse_mobile?ie=UTF8&docId=1000658923">
							<img src="../img/amazon.png">
						</a>
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
							<li><a id="" href="../index.html">Secciones</a></li>
							<li><a id="" href="../.html">Contacto</a></li>
							<li><a id="" href="../suscripcion.html">Suscripción</a></li>				
							<li><a id="navEnd" href="../como_se_hizo.pdf">Cómo se hizo</a></li>		
						</ul>
					</nav>
				</footer>
			</section>

		</section>
	</body>
</html>