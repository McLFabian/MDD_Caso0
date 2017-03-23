<!DOCTYPE html >
<html>

<head>
	<title>Pokedex BDD 2014</title>
	<meta "charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php
		$conn = mysqli_connect('localhost', 'fabian', '1EgalWohin', 'pokedexudp');
		// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
	?>
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
						<?php
							echo '<img src="images/sprites/$id.png" border=0>';
							echo '<img src="images/sprites/$nombre.gif" border=0>';
						?>
					</ul>
				</div>
			</div>
	</div>
</body>
</html>