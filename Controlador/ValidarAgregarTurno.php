<?php
require "../Modelo/conexion.php";

$Horario_IdHorario=$_POST["Horario_IdHorario"];
$Empleado_IdEmpleado=$_POST["Empleado_IdEmpleado"];
$Fecha=$_POST["Fecha"];

$objConexion = Conectarse();
$sql="insert into turno(Horario_IdHorario, Empleado_IdEmpleado,Fecha) values ('$_REQUEST[Horario_IdHorario]','$_REQUEST[Horario_IdHorario]','$_REQUEST[Fecha]')";

$resultado=$objConexion->query($sql);
if ($resultado) 
echo "El turno se agrego correctamente";
else
echo "Problemas al agregar turno"
?> 	