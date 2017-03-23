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
								<span>Subir</span> 
								<h2>Asignar pasajero</h2>  
							</div>
							<p><img src="images/gestion-pasajeros1.jpg" width="300" height="220" alt="Pasajeros1" title="Pasajeros1"></p>
							<p>
								Este apartado está dedicado para el realizar el Check-In de pasajeros en una nave especifica para realizar un viaje espacial de un origen a un destino específicos. A continuación se requerirá ingresar los siguientes datos para proseguir con el exitoso ingreso del pasajero en el itinerario de vuelo.</a>
							</p>

							<form action="asignar_pasajero.php" method="post"> 
								<table align="center" bgcolor="orange" border="2"> 
								<tbody> 
								<tr> 
								<td align="right">ID Pasajero:</td> 
								<td align="left"> <input name="id_pasajero" value="" size="20" type="text"></td> 
								<td align="right">ID Aeronave:</td>
								<td align="left"> <input name="id_aeronave" value="" size="20" type="text"></td>
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
								<span>Llegada</span> 
								<h2>Bajar pasajero</h2>  
							</div>
							<p><img src="images/gestion-pasajeros2.jpg" width="300" height="210" alt="Pasajeros2" title="Pasajeros2"></p>
							<p>
								Aquí se realiza el proceso para dar de baja a un pasajero de un vuelo por distintos motivos en el sistema de transporte espacial SIGEM. A continuación se requerirá, como en el anterior apartado, ingresar los siguientes datos para proseguir con la exitosa operación.</a>
							</p>

							<form action="bajar_pasajero.php" method="post"> 
								<table align="center" bgcolor="orange" border="2"> 
								<tbody> 
								<tr> 
								<td align="right">ID Pasajero:</td> 
								<td align="left"> <input name="id_pasajero" value="" size="20" type="text"></td> 
								<td align="right">ID Aeronave:</td>
								<td align="left"> <input name="id_aeronave" value="" size="20" type="text"></td>
								</tr>
								<tr> 
								<td align="center"><input value="Enviar" type="submit"></td> 
								<td align="center"><input value="Borrar" type="reset"></td> 
								</tr> 
								</tbody> 
								</table> 
							</form> 

						</li>
							
					</ul>
							   
				</div>

				<div id="sidebar">
					<p><img src="images/gestion-estrellas1.jpg" height="450" alt="Estrellas1" title="Estrellas1"></p>
					<p><img src="images/gestion-estrellas2.jpg" height="283" alt="Estrellas2" title="Estrellas2"></p>
				</div>
					
			</div>
					
			<div id="footer">
					<div id="footnote">
						<div class="section">
						   &copy; 2017 <a href="index.html">Daniel Méndez & Fabián Miranda Muñoz</a>. Todos los derechos reservados.
						</div>
					</div>
			</div>
			
	
</body>
</html>