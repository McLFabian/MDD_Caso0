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
					<form action="pokedex2.php" method="POST"/>
						<input type="text" name="nombre" value="Ingresa el nombre del PKMN a buscar">
						<input type="submit" name="buscar1" value="BUSCAR">
					</form>
				</div>
				
				<div class="content">				

					<ul class="articles">
						<li>
							<div>
								<span>Resultado</span> 
								<h2>Nuestros resultados::</h2>  
							</div>
							<p>
								<?php

									$conn = mysqli_connect('localhost', 'fabian', '1EgalWohin', 'pokedexudp');
									// Check connection
									if (!$conn) {
    									die("Connection failed: " . mysqli_connect_error());
									}

									$id = 0;
									$nombre = "???";
									$tipo = "???";
									$altura = 0;
									$lugares = 0;
									$region = "???";
									$ataques = "???";

								   	if (isset($_POST['buscar1'])){
								      	$nombre = $_POST['nombre'];

										$consulta = "SELECT id, tipo, altura FROM Pokemon WHERE nombre='$nombre'";
										$result = $conn->query($consulta);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
										    	$id = $row["id"];
										    	$tipo = $row["tipo"];
										    	$altura = $row["altura"];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										} 
										else {
										    echo "";
										}					
										$consulta2 = "SELECT id_ruta FROM Pokemon, Lugares_pkmn WHERE Lugares_pkmn.id_pkmn=$id";
										$result = $conn->query($consulta2);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
										    	$lugares = $row["id_ruta"];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}
										$consulta3 = "SELECT Regiones.nombre FROM Pokemon, Lugares_pkmn, Rutas, Regiones WHERE Lugares_pkmn.id_pkmn=$id AND Lugares_pkmn.id_ruta=Rutas.id AND Rutas.region=Regiones.id";
										$result = $conn->query($consulta3);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
										    	$region = $row["Regiones.nombre"];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}
										$consulta4 = "SELECT Ataques.nombre FROM Pokemon, Ataques_pkmn Ataques WHERE Ataques_pkmn.id_pkmn=$id AND Ataques_pkmn.id_atk=Ataques.id";
										$result = $conn->query($consulta4);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
										    	$ataques = $row["Ataques.nombre"];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}

										$conn->close();
									}
									elseif (isset($_POST['buscar2'])){
								      	$region = $_POST['region'];
								      	$tipo = $_POST['tipo'];
								      	$altura_min = $_POST['minaltura'];
								      	$altura_max = $_POST['maxaltura'];

										$consulta = "SELECT Pokemon.id, Pokemon.nombre, Pokemon.tipo, Pokemon.altura, Regiones.nombre FROM Pokemon, Lugares_pkmn, Rutas, Regiones WHERE Regiones.id='$region' AND Rutas.region=Regiones.id AND Rutas.id=Lugares_pkmn.id_ruta AND Lugares_pkmn.id_pkmn=Pokemon.id AND Pokemon.altura>=$altura_min AND Pokemon.altura<=$altura_max";
								   		$result = $conn->query($consulta);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
											    $id = $row['Pokemon.id'];
											    $nombre = $row['Pokemon.nombre'];
											    $tipo = $row['Pokemon.tipo'];
											    $altura = $row['Pokemon.altura'];
											    $region = $row['Regiones.nombre'];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}
									}
									elseif (isset($_POST['maxaltura'])){
										$consulta = "SELECT id, nombre, tipo, altura  FROM Pokemon WHERE altura=MIN(altura)";
								   		$result = $conn->query($consulta);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
											    $id = $row['Pokemon.id'];
											    $nombre = $row['Pokemon.nombre'];
											    $tipo = $row['Pokemon.tipo'];
											    $altura = $row['Pokemon.altura'];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}
									}
									elseif (isset($_POST['masregiones'])){
										$consulta = "SELECT id, nombre, tipo, altura  FROM Pokemon WHERE altura=MIN(altura)";
								   		$result = $conn->query($consulta);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
											    $id = $row['Pokemon.id'];
											    $nombre = $row['Pokemon.nombre'];
											    $tipo = $row['Pokemon.tipo'];
											    $altura = $row['Pokemon.altura'];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}
									}
									elseif (isset($_POST['menosataques'])){
										



									}
									elseif (isset($_POST['maschico'])){
										$consulta = "SELECT id, nombre, tipo, altura  FROM Pokemon WHERE altura=MIN(altura)";
								   		$result = $conn->query($consulta);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
											    $id = $row['Pokemon.id'];
											    $nombre = $row['Pokemon.nombre'];
											    $tipo = $row['Pokemon.tipo'];
											    $altura = $row['Pokemon.altura'];
										    }
										   	mysql_free_result($result);	// Liberar los recursos asociados con el conjunto de resultados. Esto se ejecutado automáticamente al finalizar el script.
										}
										else {
										    echo "";
										}
									}
									else{
										echo 'Busca';
									}

		                			echo "Numero: $id<br>";
									echo "Nombre: $nombre<br>";
									echo "tipo: $tipo<br>";
									echo "altura: $altura<br>";
									echo '<img src="images/sprites/$id.png" border=0><br>';
									echo '<img src="images/sprites/$nombre.gif" border=0><br>';
								?>
							</p>
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
				   
