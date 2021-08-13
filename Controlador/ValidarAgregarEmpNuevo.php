<?php
require "../Modelo/Empleado.php";
$Nombre=$_POST["Nombre"];
$NumDoc=$_POST["NumDoc"];
$FechaNac=$_POST["FechaNac"];
$Celular=$_POST["Celular"];
$TIPODEDOCUMENTO_IdTipDoc=$_POST["TIPODEDOCUMENTO_IdTipDoc"];
$emple = new Empleado();
$in = $emple -> AgregarEmpleado($Nombre, $NumDoc, $FechaNac, $Celular, $TIPODEDOCUMENTO_IdTipDoc);
//$objConexion = Conectarse();
//$sql="insert into empleado(Nombre, NumDoc, Celular, FechaNac, TIPODEDOCUMENTO_IdTipDoc) values ('$_REQUEST[Nombre]','$_REQUEST[NumDoc]','$_REQUEST[Celular]','$_REQUEST[FechaNac]','$_REQUEST[TIPODEDOCUMENTO_IdTipDoc]')";

//$in=$objConexion->query($sql);
if ($in) 
echo "El empleado es agregado correctamente";
else
echo "Problemas al agregar al empleado";
?>