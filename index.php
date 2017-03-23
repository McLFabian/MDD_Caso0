<!-- BEGIN INIT -->

<?php
include('lib/init.php');
include('bdd/sqlite.php');

$edo = 1

?>

<!-- END INIT -->

<?php
/*

   LAS VARIABLES PARA CREAR SESION LAS CAMBIE A sesion_login
   PORQUE CADA VEZ QUE VOLIAS A PANEL SE CREABAN Y HABIA ERROR DE CACHE

$edo=0;
session_start();
if(empty($_SESSION['nombre'])){
  $name=$_POST['nombre'];
  $passwd=$_POST['passwd'];
  $usuario = new Usuarios;
  $usuario->conn();
  $edo = $usuario->login($name, $passwd);
  $_SESSION['nombre']=$name;
}
else{
  $edo=1;
}

  HASTA AQUI MOVI
*/

?>

<!-- BEGIN MENU -->

<?php include('lib/menu.php'); ?>

<!-- END MENU -->

<!-- BEGIN CENTER -->
<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
  <center>
  <div class="row">
    <div class="col-md-12">
      <div class="thumbnail">
    <div class="caption">
      <h3>Nave Nodriza</h3>
        <a href="crearNaveNodriza.php" class="btn btn-default" role="button">Crear</a> 
        <a href="listarNaveNodriza.php" class="btn btn-default"   role="button">Listar</a>
    </div>
      </div>
    </div>
    </div>
<?php } ?>

<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
  <div class="row">  
    <div class="col-sm-6 col-md-12">
      <div class="thumbnail">
    <div class="caption">  
      <h3>Aeronave</h3>
      <a href="crearAeronave.php" class="btn btn-default" role="button">Crear</a> 
      <a href="listarAeronave.php" class="btn btn-default"   role="button">Listar</a> 
      <a href="revisarAeronave.php" class="btn btn-default"   role="button">Revisar aeronave</a>
    </div>
      </div>
    </div>
    </div>
<?php } ?>

<?php
   if ($edo == 1){ //USUARIO ADMIN
  ?>
  <div class="row">  
    <div class="col-sm-6 col-md-12">
      <div class="thumbnail">
    <div class="caption">  
      <h3>Pasajeros</h3>
      <a href="crearPasajero.php" class="btn btn-default" role="button"> Crear </a> 
      <a href="gestionarPasajeros.php" class="btn btn-default"   role="button">Gestionar Pasajero</a>
    </div>
      </div>
    </div>
    </div>
<?php } ?>

<?php
   if ($edo == "1" ){ 
  ?>
  <div class="row">  
    <div class="col-sm-6 col-md-12">
      <div class="thumbnail">
    <div class="caption">  
      <h3>Naves revisadas</h3>
      <a href="revisadas.php" class="btn btn-default"   role="button">Historial de naves</a>
    </div>
      </div>
    </div>
  </div>
  </div>
<?php } ?>


  </center>
<!-- END CENTER -->

<!-- BEGIN FOOTER -->

<?php include('lib/footer.php'); ?>

<!-- END FOOTER -->


<!-- BEGIN BOOTSTRAP -->

<?php include('lib/bootstrap.php'); ?>

<!-- END BOOTSTRAP -->

</html>
