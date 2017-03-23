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
								<span>Nodriza</span> 
								<h2>Crear Nave nodriza</h2>  
							</div>
							<p><img src="images/gestion-nodrizas.jpg" width="300" height="229" alt="Nodrizas" title="Nodrizas"></p>
							<p>
								Este apartado está dedicado para el registro de nuevas naves para el transporte de pasajeros espaciales. A continuación se requerirá ingresar los siguientes datos para proseguir con la exitosa creación del registro.</a>
							</p>

							<form action="crear_nodriza.php" method="post"> 
								<table align="center" bgcolor="orange" border="2"> 
								<tbody> 
								<tr> 
								<td align="right">ID Nave nodriza:</td> 
								<td align="left"> <input name="id_nodriza" value="" size="20" type="text"></td> 
								<td align="right">Nombre Nave nodriza:</td>
								<td align="left"> <input name="nombre_nodriza" value="" size="20" type="text"></td>
								</tr>
								</tbody> 
								</table> 
							</form> 
						</li>

						<li>
							<div>
								<span>Nave</span> 
								<h2>Crear aeronave</h2>  
							</div>
							<p><img src="images/gestion-naves.jpg" width="300" height="197" alt="Naves" title="Naves"></p>
							<p>
								Este apartado está dedicado para el registro de nuevas naves para el transporte de pasajeros espaciales. A continuación se requerirá ingresar los siguientes datos para proseguir con la exitosa creación del registro.</a>
							</p>

							<form action="crear_aeronave.php" method="post"> 
								<table align="center" bgcolor="orange" border="2"> 
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
							
					</ul>
							   
				</div>

				<div id="sidebar">
					<p><img src="images/gestion-nodriza.jpg" height="450" alt="Serena" title="Serena"></p>
					<p><img src="images/gestion-nave.jpg" height="283" alt="Blue" title="Blue"></p>
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