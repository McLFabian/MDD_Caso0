 
<!-- BEGIN INIT -->
<?php 
include ('bdd/sqlite.php');
include('lib/check.php');

$id=$_GET['id'];

?>
<?php include('lib/init.php'); ?>

<!-- END INIT -->

<!-- BEGIN MENU  -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->

<?php

$new_user= new Revision;
$new_user->conn();

$nombre = $_POST['nombre'];
$idRev = $_POST['idRevision'];
$new_user->insert($nombre,$id,$idRev);
	
echo "<div class='alert alert-success'><a href='#' class='alert-link'> Revisión agregada exitosamente.</a></div>";
echo "<br>";
echo "<a href=\"index.php\">Volver</a>";
echo "</center>";
?>
  

</center>
<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
