 
<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');

?>

<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php');
  $id = $_GET['id']; ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<script>

</script>
<?php 
echo "<form name='f1' role='form'  method='POST' action='revisarNave.php?id=".$id."'>"; ?>
	<?php 	
	  $aeronave= new Aeronave;
	  $aeronave->conn();
	
	  

	?>
  	<div class="form-group" style="width:300px">
    		<label for="exampleInputEmail1">Revisar aeronave:</label>
    		<br>ID Revisión: <input  type="text" name="idRevision"  />

    		<br>Nombre del revisor: <input type="text" name="nombre"/>


		
			<!--<br><strike>Fecha de vuelo:</strike> <input type="date" min="<?php echo $today; ?>" max="<?php echo date("Y-m-d", strtotime("$today +7 day")); ?>" placeholder="AAAA-MM-DD" name="fecha_origen" ><br>
			<br><strike>Fecha de llegada:</strike> <input type="date" min="<?php echo date("Y-m-d", strtotime("$today +8 day")); ?>" max="<?php echo $arrive; ?>" name="fecha_destino" placeholder="AAAA-MM-DD" ><br>
			-->
			<?php $today = date("H:i"); $hour = date("H:i", strtotime("$today +1 hour")); ?>
			<div class="hide"><br>Hora de vuelo: &nbsp;&nbsp;<input id="exit-time" name="start-time" type="time" value="<?php echo $hour; ?>" /><br></div>
			
			<!--<br>Hora de llegada: <input id="exit-time" name="end-time" type="time" /required><br>-->
  	
  </div>

  <button type="submit" value="Crear_Aeronave"  class="btn btn-default">Revisar</button>
</form>
<br><br><br>

<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
