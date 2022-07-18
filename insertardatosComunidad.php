<?php
include 'conexion.php';
$idComunidad=$_POST['idComunidad'];
$comunidad=$_POST['comunidad'];
$canton=$_POST['canton'];
$direccion=$_POST['direccion'];
$ciAsistencia=$_POST['ciAsistencia'];



$consulta="insert into comunidad values('".$idComunidad."','".$comunidad."','".$canton."','".$direccion."','".$ciAsistencia."')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>