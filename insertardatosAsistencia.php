<?php
include 'conexion.php';
$Cedula=$_POST['Cedula'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$ActividadRealizada=$_POST['ActividadRealizada'];
$Telefono=$_POST['Telefono'];
$HorarioActividad=$_POST['HorarioActividad'];
$Diregencia=$_POST['Diregencia'];



$consulta="insert into asistencia values('".$Cedula."','".$Nombres."','".$Apellidos."','".$ActividadRealizada."','".$Telefono."','".$HorarioActividad."','".$Diregencia."')";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>