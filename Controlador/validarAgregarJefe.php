<?php
require "../Modelo/Jefe.php";

$Nombre=$_POST["Nombre"];
$NumDoc=$_POST["NumDoc"];
$Contraseña=$_POST["Contraseña"];
$TIPODEDOCUMENTO_IdTipDoc=$_POST["TIPODEDOCUMENTO_IdTipDoc"];
$jefe = new Jefe();
$in = $jefe -> AgregarJefe($Nombre,$NumDoc,$Contraseña,$TIPODEDOCUMENTO_IdTipDoc);
/*$objConexion = Conectarse();
$sql="insert into jefe(Nombre, NumDoc, TIPODEDOCUMENTO_IdTipDoc, Contraseña) values ('$_REQUEST[Nombre]','$_REQUEST[NumDoc]','$_REQUEST[TIPODEDOCUMENTO_IdTipDoc]', '$_REQUEST[Contraseña]')";*/

//$resultado=$objConexion->query($sql);
if ($in) 
echo "El administrador se ha agregado correctamente";
else
echo "Problemas al agregar el administrador"
?>