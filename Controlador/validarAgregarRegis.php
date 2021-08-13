<?php
require "../Modelo/Registro.php";
 
$TipoVehiculo_IdTipVehi=$_POST["TipoVehiculo_IdTipVehi"];
$Empleado_IdEmpleado=$_POST["Empleado_IdEmpleado"];
$FechaIngreso=$_POST["FechaIngreso"];
$HoraIngreso=$_POST["HoraIngreso"];
$Placa=$_POST["Placa"];
$regi = new Registro();
$in = $regi-> AgregarRegistro($TipoVehiculo_IdTipVehi,$Empleado_IdEmpleado,$FechaIngreso,$HoraIngreso,$Placa);
/*$objConexion = Conectarse(); $sql="insert into
registro(TipoVehiculo_IdTipVehi, Empleado_IdEmpleado, FechaIngreso,
HoraIngreso, Placa) values
('$_REQUEST[TipoVehiculo_IdTipVehi]','$_REQUEST[Empleado_IdEmpleado]','$_REQUEST[FechaIngreso]','$_REQUEST[HoraIngreso]','$_REQUEST[Placa]')";*/
//$resultado=$objConexion->query($sql);
if ($in) 
echo "El registro se ha agregado correctamente";
else
echo "Problemas al agregar el registro";

?>