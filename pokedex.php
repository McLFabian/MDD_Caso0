<!DOCTYPE html >
<html>

<head>
	<title>Pokedex BDD 2014</title>
	<meta "charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
			<div id="header">
	           		<a href="index.php" id="logo"><img src="images/logo.gif" width="310" height="114" alt="" title=""></a>
					<ul class="navigation">
						<li class="active"><a href="index.php">Home</a></li>
						<li class="active"><a href="pokedex.php">Pokedex</a></li>
						<li class="active"><a href="regiones.php">Regiones</a></li>
						<li class="active"><a href="about.php">Sobre</a></li>
						<li class="active"><a href="contact.php">Contacta</a></li>
					</ul>
			</div>
			
			<div id="body">
			
			       	<div id="content">

						<div class="search">
							<form action="pokedex2.php" method="post"/>
								<input type="text" name="nombre" value="Ingresa el nombre del PKMN a buscar">
								<input type="submit" name="buscar1" value="BUSCAR">
							</form>
						</div>
								
				        <div class="content">
						        
								<ul>
									<li>
										<img src="images/pokedex-heavy.jpg" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										    <h2>El mas grande es...</h2>
										    <span>Te ha surgido la duda de cual es el mas grande de todos?, pues aqui la respuesta!.</span>
											<form action="pokedex2.php" method="post"/>
												<input type="hidden" name="consulta" value="SELECT id FROM Pokemon WHERE Pokemon.altura=MAX(Pokemon.altura)">
												<span><input type="submit" value="Averigualo" name="maxaltura"></span>
											</form>
									</li>
									<li>
										<img src="images/pokedex-masregiones.png" width="140" height="250" alt="Pet Shop" title="Pet Shop"></a>
										<h2>En mas regiones existe...</h2>
											<span>Existen criaturas muy exclusivas, pero otras no tanto. Descubramos quien aparece en mas regiones!.</span>
											<form action="pokedex2.php" method="post"/>
												<input type="hidden" name="consulta" value="">
												<span><input type="submit" value="Averigualo" name="masregiones"></span>
											</form>
									</li>
									<li>
										<img src="images/pokedex-menosatk.jpg" width="140" height="240" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Vaya que flojo!</h2>
										    <span>Halla aqui cual es el que aprende menos ataques.</span>
											<form action="pokedex2.php" method="post"/>
												<input type="hidden" name="consulta" value="">
												<span><input type="submit" value="Averigualo" name="menosataques"></span>
											</form>
									</li>
									<li>
										<img src="images/pokedex-maschico.jpg" width="140" height="240" alt="Pet Shop" title="Pet Shop"></a>
										<h2>Pero que chico este</h2>
										    <span>Dentro de tantos Pokemon diferente, obviamente debe haber uno mas chico que el resto. A ver...</span>
											<form action="pokedex2.php" method="post"/>
												<input type="hidden" name="consulta" value="SELECT id FROM Pokemon WHERE ">
												<span><input type="submit" value="Averigualo" name="maschico"></span>
											</form>
									</li>
								</ul>
						</div>
						
					    <div id="sidebar">

								<form action="pokedex2.php" method="post"/>
									<p>Por caracteristicas</p>
									<p>Region:<br />
										<select name="region">
										    <option value="Kanto">Kanto</option>
										    <option value="Johto">Johto</option> 
										    <option value="Hoenn">Hoenn</option> 
										    <option value="Sinnoh">Sinnoh</option> 
										    <option value="Unova">Unova</option> 
										    <option value="Kalos">Kalos</option> 
										</select>							
									</p>
									<p>Tipo:
										<select name="tipo">
										    <option value="normal">Normal</option>
										    <option value="acero">Acero</option> 
										    <option value="agua">Agua</option> 
										    <option value="bicho">Bicho</option> 
										    <option value="dragon">Dragon</option> 
										    <option value="electrico">Electrico</option> 
										    <option value="fantasma">Fantasma</option>
										    <option value="fuego">Fuego</option> 
										    <option value="hada">Hada</option> 
										    <option value="hielo">Hielo</option> 
										    <option value="lucha">Lucha</option> 
											<option value="planta">Planta</option> 
											<option value="psiquico">Psiquico</option>
										    <option value="roca">Roca</option> 
										    <option value="siniestro">Siniestro</option> 
										    <option value="tierra">Tierra</option> 
										    <option value="veneno">Veneno</option> 
										    <option value="volador">Volador</option> 
										</select>
									</p>
									<p>Rango estatura</p>
									<p>Minima<input type="text" name="minaltura" value=""><input type="text" name="maxaltura" value="">Maxima</p>
									<input type="submit" name="buscar2" value="BUSCAR">
								</form>

								<p>O bien, puedes crear tu mismo datos (como rutas, regiones, pokemon, etc) simplemente <a href="pokedex_crea.php">AQUI.</a></p>
								
					    </div>
				   	</div>
				  
				  	<div class="featured">
					<ul>
						<li><img src="images/sprites/pidgeotto.gif" height="80"></a></li>
						<li><img src="images/sprites/ponyta.gif" height="113"></a></li>
						<li><img src="images/sprites/exploud.gif" height="110"></a></li>
						<li><img src="images/sprites/meowstic.gif" height="110"></a></li>
						<li><img src="images/sprites/lairon.gif" height="110"></a></li>
						<li><img src="images/sprites/kyurem.gif" height="110"></a></li>
						<li><img src="images/sprites/wobbuffet.gif" height="113"></a></li>
					</ul>

			</div>
	
			<div id="footer">
					<div id="footnote">
						<div class="section">
						   &copy; 2014 <a href="index.php">Pokemon pertenece a The Pokemon Company</a>. Todos los derechos reservados.
						</div>
					</div>
			</div>
			
</body>
</html>