<?php  
require "../Modelo/Empleado.php";

$Conectarse = New Empleado();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Eliminar empleado</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="FrmEliminarEmpleado.css">
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<h3>
  <a class="button" href="Inicio.php">Cerrar sesión</a>
</h3>
  <center>
    <table align="center">
    <tr>
      <td id="docume" colspan="2" align="center" >Eliminar empleado</td>
    </tr>
    <tr>
      <td id="docuemnto" width="37%" align="right">Número de documento</td>
      <td width="63%"><label for="NumDoc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas" name="NumDoc" type="int" id="NumDoc" size="40" required="" /></td>
    </tr>
    <tr>
 <tr>
   </tr>
      <tr>
      <td id="esreg" colspan="2" align="center"><input id="eliminar" type="submit" value="Eliminar registro" name="BtnEliminar">
    </tr>
  </table>
  <tr>
  <a class="button" href="JefeMenu.php"><input id="cancelar" type="button" value="Cancelar"></a>
</center>
</form>
<?php

if (isset($_POST['BtnEliminar']))
{


    $Documento =$_POST['NumDoc'];

    $metodo = $Conectarse->EliminarEmpleado($Documento);
    //or die ("Error al Eliminar los Datos");
    echo "Datos Eliminados Correctamente";
    
  }

?>
</body>
</html>