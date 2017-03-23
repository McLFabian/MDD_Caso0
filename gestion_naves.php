<!DOCTYPE html >
<html>

<head>
	<title>SIGEM - Sistema de gestión de naves marcianas</title>
	<meta "charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

			<div id="header">
	           		<a href="index.php" id="logo"><img src="images/logo.jpg" width="310" height="72" alt="" title=""></a>
					<ul class="navigation">
						<li class="active"><a href="index.php">Home</a></li>
						<li class="active"><a href="gestion_naves.php">Naves</a></li>
						<li class="active"><a href="gestion_pasajeros.php">Pasajeros</a></li>
						<li class="active"><a href="revisar_aeronave.php">Revisión</a></li>
						<li class="active"><a href="contact.php">Contacto</a></li>
					</ul>
			</div>
			
	<div id="body">
	
			<div id="content">
				   
		        <div class="content">
							  
			   		<ul class="articles">
						<li>
							<div>
								<span>Naves</span> 
								<h2>Crear aeronave</h2>  
							</div>
							<p><img src="images/regiones-kalos.png" width="300" height="197" alt="Kalos" title="Kalos"></p>
							<p>
								Este apartado está dedicado para el registro de nuevas naves para el transporte de pasajeros espaciales. A continuación se requerirá ingresar los siguientes datos para proseguir con la exitosa creación del registro.</a>
							</p>

							<form action="crear_aeronave.php" method="post"> 
								<table align="center" bgcolor="#e9ffff" border="2"> 
								<tbody> 
								<tr> 
								<td align="right">ID Aeronave:</td> 
								<td align="left"> <input name="id_aeronave" value="" size="20" type="text"></td> 
								<td align="right">Nombre Aeronave:</td>
								<td align="left"> <input name="nombre_aeronave" value="" size="20" type="text"></td>
								</tr>
								<tr>
								<td align="right">Nodriza origen: </td>
								<td align="left"> <input name="nodriza_origen" value="" size="20" type="text"></td>
								<td align="right">Nodriza destino:</td> 
								<td align="left"> <input name="nodriza_destino" value="" size="20" type="text"></td> 
								</tr>
								<tr>
								<td align="right">Máximo de pasajeros:</td> 
								<td align="left"> <input name="max_aeronave" value="" size="20" type="number"></td> 
								</tr>

								<tr> 
								<td align="center"><input value="Enviar" type="submit"></td> 
								<td align="center"><input value="Borrar" type="reset"></td> 
								</tr> 
								</tbody> 
								</table> 
							</form> 

						</li>
						<li>
							<div>
								<span>Kanto</span> 
								<h2>El inicio de todo...</h2>  
							</div>
							<p><img src="images/regiones-kanto.jpg" width="300" height="229" alt="Kanto" title="Kanto"></p>
							<p>
								Kanto es una region del mundo Pokemon situada al este de Johto y al sur de Sinnoh. Su paisaje esta inspirado en la zona de Japon del mismo nombre, la region de Kanto.
								Kanto pertenece al mismo continente que Johto. El lazo que une ambas regiones viene dado por las Cataratas Tohjo, si bien tambien esta la ruta 27, que sirve de cruce con la Cueva Plateada, integrada en Johto pero separada de los demas lugares. Una de las formas mas rapidas de viajar de una region a otra es tomando el Magnetotren, un tren de alta velocidad que realiza el trayecto Ciudad Azafran-Ciudad Trigal, ademas del barco que hace el trayecto Ciudad Olivo-Ciudad Carmin, aunque solo salga de Ciudad Olivo los lunes y viernes; y de Ciudad Carmin los miercoles y domingos.
								La gran mayoria de las ciudades tiene nombres de colores: Ciudad Verde, Ciudad Carmin, Ciudad Celeste, etc., siendo la más importante por excelencia Ciudad Azafran, pues en ella se encuentra la sede del centro empresarial mas importante de la region, Silph S.A.. <a href="http://es.pokemon.wikia.com/wiki/Kanto">Visita WIKIDEX para mas.</a>
							</p>
						</li>
						<li>
							<div>
								<span>Johto</span> 
								<h2>La mas pequena de todas</h2>
							</div>  
							<p><img src="images/regiones-johto.png" width="300" height="203" alt="Johto" title="Johto"></p>
							<p>
								Johto es situada al oeste de Kanto. Su paisaje esta inspirado en la zona de Japon llamada region de Kinki y el oeste de la region de Tokai.
								Johto y Kanto forman una sola gran masa de tierra; un continente, en el cual al centro y dividiendo ambas regiones se encuentra la Meseta Anil, la Liga Pokemon, junto con el Monte Plateado y las Cataratas Tohjo. Comparte la misma Liga Pokemon con Kanto, solo que con otros miembros del Alto Mando y un nuevo campeon.
								El lazo que une ambas regiones viene dado por las Cataratas Tohjo, si bien tambien esta la ruta 27, que sirve de cruce con la Cueva Plateada, integrada en Johto pero separada de los demas lugares. En lo que a medios de transporte respecta, Johto y Kanto estan unidos por el Magnetotren mediante tierra y por el S.S. Aqua por via marina.
								Los nombres de las ciudades son nombres de plantas o relacionadas con plantas. <a href="http://es.pokemon.wikia.com/wiki/Kanto">Visita WIKIDEX para mas.</a>
							</p>
						</li>
						<li>
							<div>
								<span>Hoenn</span> 
								<h2>La mas rica en bosques</h2>  	
							</div>
							<p><img src="images/regiones-hoenn.png" width="300" height="212" alt="Hoenn" title="Hoenn"></p>
							<p>
								En Hoenn se desarrolla la trama de los videojuegos Pokemon Rubi, Zafiro y Esmeralda y sus respectivos remakes, Pokemon Rubi Omega y Pokemon Zafiro Alfa. Se encuentra en una isla situada al suroeste de Johto.
								Los entrenadores Pokemon que empieza su aventura en esta region pueden elegir entre los Pokemon iniciales, Treecko, Torchic y Mudkip. En cuanto a los Pokemon legendarios, el trio creador, compuesto por Kyogre, Groudon y Rayquaza, guarda una profunda relacion con el territorio. Dos son las organizaciones criminales que operan en Hoenn: el Equipo Aqua y el Equipo Magma. Ambas pretenden controlar la magna fuerza de Kyogre y Groudon, respectivamente.
								En el anime, Hoenn aparece en la sexta, septima y octava temporada, donde se desarrolla la aventura de Ash Ketchum, con el objetivo de conseguir las 8 medallas de la region. Le acompañan May/Aura, Max y Brock. <a href="http://es.pokemon.wikia.com/wiki/Hoenn">Visita WIKIDEX para mas.</a>
							</p>
						</li>
						<li>
							<div>
								<span>Sinnoh</span> 
								<h2>Diamante, Perla y Platino puro</h2>  	
							</div>
							<p><img src="images/regiones-sinnoh.jpg" width="300" height="211" alt="Sinnoh" title="Sinnoh"></p>
							<p>
								Esta al norte de Kanto. Su paisaje esta inspirado en la zona de Japon Hokkaido, la mitad sur de la isla rusa Sajalin y la isla de Kunashir.
								Sinnoh es la region mas grande y, como Hoenn, sus ciudades y pueblos no siguen una regla general a la hora de nombrarse como si sucede en Kanto y Johto. La capital es Ciudad Jubileo, lugar donde se concentran algunos de los edificios mas importantes, como la Estacion de Intercambio Global (GTS) , la sede de Jubileo TV o poke-reloj S.A.. <a href="http://es.pokemon.wikia.com/wiki/sinnoh">Visita WIKIDEX para mas.</a>
							</p>
						</li>
						<li>
							<div>
								<span>Unova</span> 
								<h2>Pokemon, a la americana</h2>  		
							</div>
							<p><img src="images/regiones-unova.png" width="300" height="195" alt="Unova" title="Unova"></p>
							<p>
								Teselia es la region en donde se desarrolla la trama de los videojuegos Pokemon Negro y Pokemon Blanco, y posteriormente tambien es escenario de los videojuegos Pokemon Negro 2 y Pokemon Blanco 2.
								En principio, parece estar mas lejos que cualquier otra region. Se ve que en Teselia, con respecto a las demas regiones del mundo Pokemon, sus ciudades son mucho mas modernas. Por ejemplo, en Ciudad Porcelana, existen grandes edificios. Esta region tiene mucho que ver con la construccion, ya que los nombres de los lugares se refieren a los materiales y los procesos de la ceramica: Pueblo Arcilla, Ciudad Porcelana, Ciudad Teja, Bosque Azulejo, etc.
								Junichi Masuda insinuo en su blog que los sectores geograficos y sociales de Teselia se basan en el area metropolitana de Nueva York. Esta idea tiene logica dado que en la region hay muchas referencias a Estados Unidos, como lideres de gimnasio de aspecto indigena o Pokemon basados en animales estadounidenses, como Bouffalant, o Braviary. Ademas, Ciudad Porcelana podria ser Manhattan, y el puente que sale de Ciudad Porcelana, el puente de Brooklyn; el parque que hay al norte de Ciudad Porcelana parece Central Park, y los demas sitios se podran visualizar con esos datos como el Bronx, Brooklin, Queens, Staten Island, etc. Un claro ejemplo de esto esta en la Isla Libertad, una referencia a la isla homonima donde se situa la Estatua de la Libertad.
								Es la primera de las regiones, reveladas hasta el momento, que tiene una ciudad con una cantidad de edificios y embarcaciones considerables, dado que en las regiones anteriores tambien aparecian, pero en un numero considerablemente menor (en el anime se pueden observar ciudades con edificios altos). <a href="http://es.pokemon.wikia.com/wiki/unova">Visita WIKIDEX para mas.</a> 
							</p>
						</li>
							
					</ul>
							   
				</div>

				<div id="sidebar">
					<p><img src="images/regiones-side-serena.png" width="380" alt="Serena" title="Serena"></p>
					<p><img src="images/regiones-side-blue.png" width="205" alt="Blue" title="Blue"></p>
					<p><img src="images/regiones-side-crystal.jpeg" width="285" alt="Crystal" title="Crystal"></p>
					<p><img src="images/regiones-side-sapphire.png" width="162" alt="Sapphire" title="Sapphire"></p>
					<p><img src="images/regiones-side-platina.png" width="250" alt="Platina" title="Platina"></p>
					<p><img src="images/regiones-side-liza.png" width="305" alt="Liza" title="Liza"></p>
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