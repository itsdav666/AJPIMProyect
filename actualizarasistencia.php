<?php
include 'conexion.php';
$Cedula=$_GET['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$ActividadRealizada=$_POST['ActividadRealizada'];
$Telefono=$_POST['Telefono'];
$HorarioActividad=$_POST['HorarioActividad'];
$Diregencia=$_POST['Diregencia'];
$consulta=" update asistencia 
set Nombres='".$Nombre."',
    Apellidos='".$Apellidos."',
    ActividadRealizada='".$ActividadRealizada."',
    Telefono='".$Telefono."',
    HorarioActividad='".$HorarioActividad."',
    Diregencia='".$Diregencia."'
where Cedula ='$Cedula'";
mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>


