<?php
require "../Modelo/conexion.php";

$Nombre=$_POST["Nombre"];
$NumDoc=$_POST["NumDoc"];
$Contraseña=$_POST["Contraseña"];
$TIPODEDOCUMENTO_IdTipDoc=$_POST["TIPODEDOCUMENTO_IdTipDoc"];

$objConexion = Conectarse();
$sql="insert into jefe(Nombre, NumDoc, TIPODEDOCUMENTO_IdTipDoc, Contraseña) values ('$_REQUEST[Nombre]','$_REQUEST[NumDoc]','$_REQUEST[TIPODEDOCUMENTO_IdTipDoc]', '$_REQUEST[Contraseña]')";

$resultado=$objConexion->query($sql);
if ($resultado) 
echo "El administrador se ha agregado correctamente";
else
echo "Problemas al agregar el administrador"
?>