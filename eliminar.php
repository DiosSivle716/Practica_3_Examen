<?php
$con=mysqli_connect('localhost','root', '', 'profile') or die('error en la concexion del servidor');
$Nombre = $_GET['Nombre'];
$eliminar = "DELETE FROM `datos` WHERE Nombre = '$Nombre'";

$resultEliminar = mysqli_query($con, $eliminar);

if ($resultEliminar) {
header("Location: registro.php");
} else {
  echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}
 ?>
