<!DOCTYPE html >
<html>

<head>
	<title>SIGEM - Sistema de gestión de naves marcianas</title>
	<meta "charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<?php 
		include ('bdd/sqlite.php');
	?>
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
							<p><img src="images/gestion-estrellas1.jpg" width="300" height="160" alt="Nodrizas" title="Nodrizas"></p>
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

<form name="f1" role="form"  method="post" action="add_aeronave.php">
	<?php 	
	  $nave_nodriza= new NaveNodriza;
	  $nave_nodriza_d= new NaveNodriza;
	  $nave_nodriza->conn();
	  $nave_nodriza_d->conn();

	  

	?>
  	<div class="form-group" style="width:300px">
    		<label for="exampleInputEmail1">Crear Nueva Aeronave:</label><br>
    		<!--<input  name="nombre"  class="form-control" id="exampleInputEmail1" placeholder="Nombre de la Aeronave" /required>-->
    		<br>Seleccione la capacidad:
    		<input type="number" name="capacidad" min="1" max="100" placeholder="1"/><br>
    		<br>Origen de la Nave Nodriza: &nbsp;&nbsp;&nbsp;<?php $nave_nodriza->get_listar(2); ?><br>
			<br>Destino de la Nave Nodriza:&nbsp;&nbsp;<?php $nave_nodriza_d->get_listar(3); ?><br>
		
			<!--<br><strike>Fecha de vuelo:</strike> <input type="date" min="<?php echo $today; ?>" max="<?php echo date("Y-m-d", strtotime("$today +7 day")); ?>" placeholder="AAAA-MM-DD" name="fecha_origen" ><br>
			<br><strike>Fecha de llegada:</strike> <input type="date" min="<?php echo date("Y-m-d", strtotime("$today +8 day")); ?>" max="<?php echo $arrive; ?>" name="fecha_destino" placeholder="AAAA-MM-DD" ><br>
			-->
			<?php $today = date("H:i"); $hour = date("H:i", strtotime("$today +1 hour")); ?>
			<br>Hora de vuelo: &nbsp;&nbsp;<input id="exit-time" name="start-time" type="time" value="<?php echo $hour; ?>" /required><br>
			
			<!--<br>Hora de llegada: <input id="exit-time" name="end-time" type="time" /required><br>-->
  	
  </div>

  <button type="submit" value="Crear_Aeronave" onClick="comprobarNodrizas()" class="btn btn-default">Crear</button>
</form>

						

						</li>
							
					</ul>
							   
				</div>

				<div id="sidebar">
					<p><img src="images/gestion-nodriza.jpg" height="450" alt="Nodriza" title="Nodriza"></p>
					<p><img src="images/gestion-nave.jpg" height="283" alt="Nave" title="Nave"></p>
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