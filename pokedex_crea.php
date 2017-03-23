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
				   
		        <div class="content">
							  
			   			<?php

			   			$conn = mysqli_connect('localhost', 'fabian', '1EgalWohin', 'pokedexudp');
			   			// Check connection
			   			if (!$conn) 
			   				{
					    		die("Connection failed: " . mysqli_connect_error());
							}
							else
							{
								if (isset($_POST['region']))
								{
							      	$nombre = $_POST['reg-nombre'];
									$consulta = "INSERT INTO Regiones (nombre) VALUES ('$nombre')";
									$conn->query($consulta);
								}
								elseif (isset($_POST['update-region']))
								{
							      	$id = $_POST['reg-num'];
							      	$nombre = $_POST['update-reg-nombre'];
									$consulta = "UPDATE Regiones SET nombre='$nombre' WHERE id=$id";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['ruta']))
								{
							      	$id = $_POST['ruta_id'];
							      	$region = $_POST['region'];
									$consulta = "INSERT INTO Rutas (id, region) VALUES ($id, $region)";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['update-ruta']))
								{
							      	$id = $_POST['ruta_id'];
							      	$region = $_POST['update-region'];
									$consulta = "UPDATE Rutas SET region=$region WHERE id=$id";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['ataque']))
								{
									$nombre = $_POST['atk-nombre'];
							      	$tipo = $_POST['atk-tipo'];
							      	$potencia = $_POST['atk-potencia'];
									$consulta = "INSERT INTO Ataques (nombre, tipo, potencia) VALUES ('$nombre','$tipo', $potencia)";
									$conn->query($consulta);
					
								}
								elseif (isset($_POST['update-ataque']))
								{
									$id = $_POST['atk-num'];
							      	$nombre = $_POST['update-atk-nombre'];
							      	$tipo = $_POST['update-atk-tipo'];
									$potencia = $_POST['update-atk-potencia'];
									$consulta = "UPDATE Ataques SET nombre='$nombre', tipo='$tipo', potencia=$potencia WHERE id=$id";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['pokemon']))
								{
							      	$nombre = $_POST['pkmn-nombre'];
							      	$altura = $_POST['pkmn-altura'];
							      	$tipo = $_POST['pkmn-tipo'];
									$consulta = "INSERT INTO Pokemon (nombre, tipo, altura) VALUES ('$nombre', '$tipo', $altura)";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['update-pokemon']))
								{
							      	$nombre = $_POST['pkmn-nombre'];
							      	$new_nombre = $_POST['update-pkmn-nombre'];
							      	$altura = $_POST['update-pkmn-altura'];
							      	$tipo = $_POST['update-pkmn-tipo'];
									$consulta = "UPDATE Pokemon SET nombre='$new_nombre', tipo='$tipo', altura=$altura WHERE nombre=$nombre";
									$conn->query($consulta);
								
								}
								elseif (isset($_POST['lugares_pkmn']))
								{
							      	$id_pkmn = $_POST['pkmn-id'];
							      	$id_ruta = $_POST['ruta-id'];
									$consulta = "INSERT INTO Lugares_pkmn (id_pkmn, id_ruta) VALUES ($id_pkmn, $id_ruta)";
									$conn->query($consulta);
								}
								elseif (isset($_POST['update-lugares_pkmn']))
								{
							      	$id_pkmn = $_POST['pkmn-id'];
							      	$id_ruta = $_POST['ruta-id'];
									$new_id_ruta = $_POST['update-ruta-id'];
									$consulta = "UPDATE Lugares_pkmn SET id_ruta=$new_id_ruta WHERE id_pkmn=$id_pkmn AND id_ruta=$id_ruta";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['ataques_pkmn']))
								{
							      	$id_pkmn = $_POST['pkmn-id'];
							      	$id_atk = $_POST['atk-id'];
									$consulta = "INSERT INTO Ataques_pkmn (id_pkmn, id_atk) VALUES ($id_pkmn, $id_atk)";
									$conn->query($consulta);
										
								}
								elseif (isset($_POST['update-ataques_pkmn']))
								{
							      	$id_pkmn = $_POST['pkmn-id'];
							      	$id_atk = $_POST['atk-id'];
							      	$new_id_atk = $_POST['update-atk-id'];
									$consulta = "UPDATE Ataques_pkmn SET id_atk='$new_id_atk' WHERE id_pkmn=$id_pkmn AND id_atk=$id_atk";
									$conn->query($consulta);
										
								}
							}
			   			?>

			   		<ul class="articles">
						<li>
							<div>
								<span>Regiones</span> 
								<h2>Crea un nuevo mundo</h2>  
							</div>
							<p><img src="images/regiones-kalos.png" width="300" height="197" alt="Kalos" title="Kalos"></p>
							<p>
								
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el nombre: <input type="text" name="reg-nombre"></p>
									<p><input type="submit" value="Crear ahora" name="region"></p> 
								</FORM>
							</p>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>O cambia el nombre de una Region</p>
									<p>Ingresa el numero: <input type="text" name="reg-num"></p>
									<p>Ingresa el nuevo nombre: <input type="text" name="update-reg-nombre"></p>
									<p><input type="submit" value="Actualizar" name="update-region"></p>
								</FORM>
							</p>
						</li>
						<li>
							<div>
								<span>Rutas</span> 
								<h2>Inventa nuevas rutas</h2>  
							</div>
							<p><img src="images/regiones-kanto.jpg" width="300" height="229" alt="Kanto" title="Kanto"></p>
							<p>
							
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el numero de ruta: <input type="text" name="ruta-id"></p>
									<p>A que region pertenece?:  
										<select size="1" name="region">
											<option selected value="6">Kalos</option>
											<option value="1">Kanto</option>
											<option value="2">Johto</option>
											<option value="3">Hoenn</option>
											<option value="4">Sinnoh</option>
											<option value="5">Unova</option>
										</select>
									</p>
									<p><input type="submit" value="Crear Ruta" name="ruta"></p> 
								</FORM>
							
							</p>

							<p>O cambia a que region pertenece la ruta:</p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el numero de ruta: <input type="text" name="ruta-id"></p>
									<p>Nueva region a pertenecer:  
										<select size="1" name="update-region">
											<option selected value="6">Kalos</option>
											<option value="1">Kanto</option>
											<option value="2">Johto</option>
											<option value="3">Hoenn</option>
											<option value="4">Sinnoh</option>
											<option value="5">Unova</option>
										</select>
									</p>
									<p><input type="submit" value="Actualizar" name="update-ruta"></p> 
								</FORM>
							</p>

						</li>
						<li>
							<div>
								<span>Ataques</span> 
								<h2>Se creativo, crea nuevos movimientos</h2>
							</div>  
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el nombre: <input type="text" name="atk-nombre"></p>
									<p>Tipo:
										<select size="1" name="atk-tipo">
											<option selected value="NULL">???</option>
											<option value="Acero">Acero</option>
											<option value="Agua">Agua</option>
											<option value="Bicho">Bicho</option>
											<option value="Dragon">Dragon</option>
											<option value="Electrico">Electrico</option>
											<option value="Fantasma">Fantasma</option>
											<option value="Hada">Hada</option>
											<option value="Hielo">Hielo</option>
											<option value="Lucha">Lucha</option>
											<option value="Normal">Normal</option>
											<option value="Oscuro">Oscuro</option>
											<option value="Planta">Planta</option>
											<option value="Psiquico">Psiquico</option>
											<option value="Roca">Roca</option>
											<option value="Tierra">Tierra</option>
											<option value="Veneno">Veneno</option>
											<option value="Volador">Volador</option>
										</select>
									</p>
									<p>Cual es su potencia?
										<select size="1" name="atk-potencia">
											<option selected value="NULL">0 (Efecto)</option>
											<option value="20">20</option>
											<option value="30">30</option>
											<option value="40">40</option>
											<option value="60">60</option>
											<option value="80">80</option>
											<option value="95">95</option>
											<option value="100">100</option>
											<option value="120">120</option>
											<option value="150">150</option>
											<option value="200">200</option>
										</select></p>
									<p><input type="submit" value="Crear movimiento" name="ataque"> 
								</FORM>
							</p>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>O cambia las caracteristicas de un ataque</p>
									<p>Ingresa el numero: <input type="text" name="atk-num"></p>
									<p>Ingresa el nuevo nombre: <input type="text" name="update-atk-nombre"></p>
									<p>Nuevo Tipo:
										<select size="1" name="update-atk-tipo">
											<option selected value="NULL">???</option>
											<option value="Acero">Acero</option>
											<option value="Agua">Agua</option>
											<option value="Bicho">Bicho</option>
											<option value="Dragon">Dragon</option>
											<option value="Electrico">Electrico</option>
											<option value="Fantasma">Fantasma</option>
											<option value="Hada">Hada</option>
											<option value="Hielo">Hielo</option>
											<option value="Lucha">Lucha</option>
											<option value="Normal">Normal</option>
											<option value="Oscuro">Oscuro</option>
											<option value="Planta">Planta</option>
											<option value="Psiquico">Psiquico</option>
											<option value="Roca">Roca</option>
											<option value="Tierra">Tierra</option>
											<option value="Veneno">Veneno</option>
											<option value="Volador">Volador</option>
										</select>
									</p>
									<p>Su nueva potencia:
										<select size="1" name="update-atk-potencia">
											<option selected value="NULL">0 (Efecto)</option>
											<option value="20">20</option>
											<option value="30">30</option>
											<option value="40">40</option>
											<option value="60">60</option>
											<option value="80">80</option>
											<option value="95">95</option>
											<option value="100">100</option>
											<option value="120">120</option>
											<option value="150">150</option>
											<option value="200">200</option>
										</select></p>
									<p><input type="submit" value="Actualizar" name="update-ataque"></p>
								</FORM>
							</p>
						</li>
						<li>
							<div>
								<span>Pokemon</span> 
								<h2>Crea una nueva criatura</h2>  	
							</div>
							<p><img src="images/sprites/ampharos-mega.gif" height="212" alt="Hoenn" title="Hoenn"></p>
							<FORM METHOD="post" ACTION="pokedex_crea.php">
								<p>
									Ingresa el nombre: <input type="text" name="pkmn-nombre"></p>
								</p>
								<p>
									Ingresa su altura (en cm): <input type="text" name="pkmn-altura"></p>
								</p>
								<p>Tipo:
									<select size="1" name="pkmn-tipo">
										<option selected value="NULL">???</option>
										<option value="Acero">Acero</option>
										<option value="Agua">Agua</option>
										<option value="Bicho">Bicho</option>
										<option value="Dragon">Dragon</option>
										<option value="Electrico">Electrico</option>
										<option value="Fantasma">Fantasma</option>
										<option value="Hada">Hada</option>
										<option value="Hielo">Hielo</option>
										<option value="Lucha">Lucha</option>
										<option value="Normal">Normal</option>
										<option value="Oscuro">Oscuro</option>
										<option value="Planta">Planta</option>
										<option value="Psiquico">Psiquico</option>
										<option value="Roca">Roca</option>
										<option value="Tierra">Tierra</option>
										<option value="Veneno">Veneno</option>
										<option value="Volador">Volador</option>
									</select>
								</p>
								<p><input type="submit" value="Crear pokemon" name="pokemon"> 
							</FORM>
							<p>O actualiza un Pokemon:</p>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
								<p>
									Nombre del Pokemon a actualizar: <input type="text" name="pkmn-nombre"></p>
								<p>
									Ingresa el nuevo nombre: <input type="text" name="update-pkmn-nombre"></p>
								</p>
								<p>
									Ingresa su nueva altura (en cm): <input type="text" name="update-pkmn-altura"></p>
								</p>
								<p>Su nuevo Tipo:
									<select size="1" name="update-pkmn-tipo">
										<option selected value="NULL">???</option>
										<option value="Acero">Acero</option>
										<option value="Agua">Agua</option>
										<option value="Bicho">Bicho</option>
										<option value="Dragon">Dragon</option>
										<option value="Electrico">Electrico</option>
										<option value="Fantasma">Fantasma</option>
										<option value="Hada">Hada</option>
										<option value="Hielo">Hielo</option>
										<option value="Lucha">Lucha</option>
										<option value="Normal">Normal</option>
										<option value="Oscuro">Oscuro</option>
										<option value="Planta">Planta</option>
										<option value="Psiquico">Psiquico</option>
										<option value="Roca">Roca</option>
										<option value="Tierra">Tierra</option>
										<option value="Veneno">Veneno</option>
										<option value="Volador">Volador</option>
									</select>
								</p>
								<p><input type="submit" value="Actualizar" name="update-pokemon"> 
							</FORM>
							</p>
						</li>
						<li>
							<div>
								<span>Habitat</span> 
								<h2>Asigna habitat a un Pokemon</h2>  	
							</div>
							<p><img src="images/regiones-sinnoh.jpg" width="300" height="211" alt="Sinnoh" title="Sinnoh"></p>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el numero de Pokemon: <input type="text" name="pkmn-id"></p>
									<p>Ingresa el numero de ruta: <input type="text" name="ruta-id"></p>
									<p><input type="submit" value="Crear habitat" name="lugares_pkmn"></p> 
								</FORM>
							</p>
							<p>O Reemplaza un habitat de un Pokemon</p>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el numero de Pokemon: <input type="text" name="pkmn-id"></p>
									<p>Ingresa el numero de ruta: <input type="text" name="ruta-id"></p>
									<p>Ingresa el nuevo numero de ruta: <input type="text" name="update-ruta-id"></p>
									<p><input type="submit" value="Actualizar" name="update-lugares_pkmn"></p> 
								</FORM>
							</p>
						</li>
						<li>
							<div>
								<span>Movs.</span> 
								<h2>Asigna movimientos a un Pokemon</h2>  		
							</div>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el numero de Pokemon: <input type="text" name="pkmn-id"></p>
									<p>Ingresa el numero de ataque: <input type="text" name="atk-id"></p>
									<p><input type="submit" value="Asignar" name="ataques_pkmn"></p> 
								</FORM>
							</p>
							<p>O reemplaza un ataque por otro:</p>
							<p>
								<FORM METHOD="post" ACTION="pokedex_crea.php">
									<p>Ingresa el numero de Pokemon: <input type="text" name="pkmn-id"></p>
									<p>Ingresa el numero de ataque: <input type="text" name="atk-id"></p>
									<p>Ingresa el nuevo numero de ataque: <input type="text" name="update-atk-id"></p>
									<p><input type="submit" value="Actualizar" name="update-ataques_pkmn"></p> 
								</FORM>
							</p>

						</li>
							
					</ul>
							   
				</div>

				<div id="sidebar">
					<p><img src="images/regiones-side-liza.png" width="355" alt="Liza" title="Liza"></p>
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
	</div>
			
	<div id="footer">
	
		<div id="footnote">
	
			<div class="section">
			   &copy; 2014 <a href="index.html">Pokemon pertenece a The Pokemon Company</a>. Todos los derechos reservados.
			</div>
		
		</div>
	
	</div>
			
	
</body>
</html>