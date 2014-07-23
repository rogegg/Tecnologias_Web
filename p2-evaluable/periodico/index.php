<!doctype html>
<?php session_start(); ?>
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


				<?php
					if(isset($_SESSION['usuario'])) {
						echo "<p>Bienvenido ".$_SESSION['usuario']."</p>";
						if($_SESSION['permisos']=="1"){
							echo '<a href="administracion.php"><button type="button">Administración</button></a>';
						}
						echo '<a href="php/cerrar.php"><button type="button">Cerrar sesión</button></a>';
						
					}else{
						echo'<section id="inicio_sesion">
						
							<form method="post" action="php/login.php" onsubmit="return validarLogin()">
								<input class="datos" type="text" id="user" name="user" placeholder="Usuario" required></input>
								<input class="datos" type="password" id="pass" name="pass" placeholder="Contraseña" required></input>
								<input type="submit" name="btn1" value="Entrar">
							</form>

							<a href="registro.php"><button type="button">Registrarse</button></a>
					
						</section> ';
					}
				?>


				<header>
					<a href="index.php">
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


				<section class="columnLeft">

					<article class="artEconomia">
						<a href="economia/pruebas_europeas_someteran_banca_20140425.php">
							<img src="economia/pruebas_europeas_someteran_banca/pruebas_europeas_someteran_banca.jpg" 
								 alt="">
						</a>
						<h2 onmouseover="abrirVentana()" onmouseout="cerrarVentana()"><a id="title_art" href="economia/pruebas_europeas_someteran_banca_20140425.php">
							Las pruebas europeas someterán a la banca a un escenario extremo
						</a></h2>
						<section id="noticiasRelacionadas" style="display:none;" onmouseover="abrirVentana()"  onmouseout="cerrarVentana()">
							<nav>
								<ul>
								<li><a id="economia" href="economia.php">Las eléctricas ofrecen un precio fijo de la luz</a></li>
								<li><a id="economia" href="economia.php">¿Cuánto cuesta pedir dinero a un prestamista?</a></li>
								<li><a id="economia" href="economia.php">Fitch sube un escalón la nota de España y la acerca al notable</a></li>
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
						<p>En España, el escenario se traduciría en una caída del PIB del 1,2% este año y del 1,7% en 2015</p>
					</article>	




					<article class="artInternacional">
						<a href="internacional/eeuu_cede_poder_internet_20140424.html">
							<img src="internacional/eeuu_cede_poder_internet/eeuu_cede_poder_internet.jpg" 
								 alt="eeuu cede poder internet">
						</a>
						<h2><a id="title_art" href="internacional/eeuu_cede_poder_internet_20140424.html">
							EEUU cede poder en Internet
						</a></h2>
						<section class="autor_seccion">
							<section class="autor">
								<h5> Rogelio GG </h5>
							</section>
							<p>&nbsp;||&nbsp;</p>
							<section class="seccion">
								<h5> Internacional </h5>
							</section>
						</section>
						<br><hr>
						<p>Una cumbre brasileña debate un nuevo orden de la Red, aunque los países 
							desarrollados se oponen a que lo gobierne la ONU.</p>
					</article>	
					
					
				</section>


				<section class="columnMiddle">

					<article class="artEconomia">
						<h2><a id="title_art" href="economia/electricas_ofrecen_precio_fijo_20140425.html">
							Las eléctricas ofrecen un precio fijo de la luz 100 euros superior al actual
						</a></h2>
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
						<p>Las previsiones indican que la diferencia se reducirá hasta 60-70 euros a lo largo del año. La CNMC recomienda a los abonados prudencia en la contratación para evitar penalizaciones</p>
					</article>	


					<article class="artInternacional">
						<a href="internacional/neutralidad_red_excluida_netmundial_25042014.html">
							<img src="internacional/neutralidad_red_excluida_netmundial/neutralidad_red_excluida_netmundial.jpg" 
								 alt="neutralidad red excluida netmundial">
						</a>
						<h2><a id="title_art" href="internacional/neutralidad_red_excluida_netmundial_25042014.html">
							La ‘neutralidad’ de la Red, excluida del documento de la NETMundial
						</a></h2>
						<section class="autor_seccion">
							<section class="autor">
								<h5> Rogelio GG </h5>
							</section>
							<p>&nbsp;||&nbsp;</p>
							<section class="seccion">
								<h5> Internacional </h5>
							</section>
						</section>
						<br><hr>
						<p>EE UU y la UE presionan para que la NETMundial de Brasil despeje 
							el camino para una Red a dos velocidades</p>
					</article>	
									
				</section>


				<section class="columnRight">

					<section id="newArt">
						<h2> Última hora</h2>
						
						<?php
							try{
								$conexion = new PDO("mysql: host=bahia.ugr.es; dbname=76423766", "76423766", "76423766x");
								$conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							}catch(PDOException $e){
								echo "Error en la conexión: ".$e->getMessage(); 
							}
							$consultaSQL = "SELECT * FROM noticia ORDER BY id_noticia DESC";
							try{
								$resultados = $conexion->query($consultaSQL);
							}catch(PDOException $e){
								echo "Error en la consulta: ".$e->getMessage(); 
							}
							foreach ($resultados as $fila) {

								echo " <a href=\"".$fila['enlace']."\">
											<article id=\"new\">
												<h4>".$fila['titulo']."</h4>
												<p>".$fila['texto']."</p>
											</article>
										</a><hr>";
							}
						?>


					</section>


					<hr><hr>


					<section id="bodyAd">
						
						<a href="http://www.juegos.com/juego/goodgame-empire">
							<img src="img/godgame_empire.jpg">
						</a>

						<a href="http://www.amazon.es/b/ref=amb_link_180495467_2?ie=UTF8&node=4368893031&pf_rd_m=A1AT7YVPFBWXBL&pf_rd_s=right-3&pf_rd_r=0CM6YGX0WY3RNN3YDQ61&pf_rd_t=101&pf_rd_p=482330927&pf_rd_i=602357031">	
							<img src="img/prepara_coche_moto.png">
						</a>
						<a href="http://www.amazon.es/gp/feature.html/ref=amb_link_181085367_2?ie=UTF8&docId=1000714053&pf_rd_m=A1AT7YVPFBWXBL&pf_rd_s=right-csm-3&pf_rd_r=0CM6YGX0WY3RNN3YDQ61&pf_rd_t=101&pf_rd_p=486656047&pf_rd_i=602357031">
							<img src="img/pack_app_musicales.jpg">
						</a>
						<a href="http://www.amazon.es/gp/feature.html/ref=o_disp_euhouse_mobile?ie=UTF8&docId=1000658923">
							<img src="img/amazon.png">
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