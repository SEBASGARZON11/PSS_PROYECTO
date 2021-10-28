<?php  
require "../Modelo/conexion.php";

$objConexion = Conectarse();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar Empleado</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

  <center><table width="42%" border="3" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00">Eliminar Empleado</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Documento</td>
      <td width="63%"><label for="NumDoc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas" name="NumDoc" type="int" id="NumDoc" size="40" required="" /></td>
    </tr>
    <tr>
 <tr>
   </tr>
      <tr>
      <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" value="Eliminar Registro" name="BtnEliminar">
    </tr>
  </table></center>
</form>
<?php

if (isset($_POST['BtnEliminar']))
{


    $Documento =$_POST['NumDoc'];

    mysqli_query($objConexion,"DELETE from empleado WHERE NumDoc = '$Documento' ")
    or die ("Error al Eliminar los Datos");
    echo "Datos Eliminados Correctamente";
    
  }

?>
</body>
</html>