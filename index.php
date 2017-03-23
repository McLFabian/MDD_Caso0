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
			
					<div class="banner">&nbsp;</div>
					
			       	<div id="content">
				   
				        <div class="content">
								<ul>
									<li>
										<a href="pokedex.php"><img src="images/index-pokedex.png" width="114" height="160" alt="Pokedex" title="Pokedex"></a>
										<h2>Tu fuente de informacion Pokemon</h2>
										<p>Averigua mas sobre estas criaturas. Sientete inmerso!.<a class="more" href="pokedex.php">Vamos!</a></p>
									</li>
									<li>
										<a href="regiones.php"><img src="images/index-region.png" width="114" height="160" alt="Pokedex" title="Regiones"></a>
										<h2>Conoce las Regiones</h2>
										<p>El mundo real es enorme... y el de Pokemon tambien!, descubre sus distintas geografias. <a class="more" href="regiones.php">Descubre!</a></p>
									</li>
									<li>
										<a href="about.php"><img src="images/index-about.jpg" width="114" height="160" alt="Pokedex" title="Sobre"></a>
										<h2>Algo mas...</h2>
										<p>Enterate mas sobre como nace esto.<a class="more" href="about.php">Sigue!</a></p>
									</li>
									<li>
										<a href="contact.php"><img src="images/index-contact.png" width="114" height="160" alt="Pokedex" title="Contacto"></a>
										<h2>Contacta!</h2>
										<p>Si te interesa el proyecto, no dudes en escribir!.<a class="more" href="contact.php">Escribe!</a></p>
									</li>
								</ul>
						</div>
						
					    <div id="sidebar">
					    	<p>Busca tu Pokemon!</p>
								<div class="search">
									<form action="pokedex2.php" method="post"/>
										<input type="text" name="nombre" value="nombre">
										<input type="submit" name="buscar1" value="Buscar1">
									</form>
								</div>
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
						   &copy; 2014 <a href="index.html">Pokemon pertenece a The Pokemon Company</a>. Todos los derechos reservados.
						</div>
					</div>
			</div>
			
	
</body>
</html>