<?php  
require "../Modelo/conexion.php";

$objConexion = Conectarse();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultar Empleado</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <center><table width="42%" border="3" align="center">
    <tr>
    <td colspan="2" align="center" bgcolor="#FFCC00">CONSULTAR EMPLEADOS</td>
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
      <td colspan="2" align="center" ><input type="submit" name="btnConsultar" value="Consultar un empleado" /></td>
      <tr>
    </tr>
    <tr>
    </tr> 
  </table>
</center>
 </form>
 <?php

$NumDoc = "";

if (isset($_POST['btnConsultar']))
{
  $NumDoc = $_POST["NumDoc"];

  $sql="SELECT * FROM empleado WHERE NumDoc = $NumDoc ";
  $resultados = $objConexion->query($sql);
  while ($consulta = mysqli_fetch_array($resultados))   
  {
    echo "<br> Nombre: ".$consulta['Nombre']; 
    echo "<br> Número de identificación: ".$consulta['NumDoc'];
    echo "<br> Fecha de nacimiento: ".$consulta['FechaNac'];
    echo "<br> Celular: ".$consulta['Celular']."<br>";
  }
}
?> 
 <form id="form1" name="form1" method="post" action="">
<br>
  <td colspan="2" align="center" ><input type="submit" name="btnConsultarTodo" value="Consultar todos" /></td>
</form>

  <?php

if (isset($_POST['btnConsultarTodo']))
{
  $sql="SELECT * FROM empleado";
  $resultados = $objConexion->query($sql);
  while ($consulta = mysqli_fetch_array($resultados))   
  {
    echo "<br> Identificación: ".$consulta['IdEmpleado']; 
    echo "<br> Tipo de documento: ".$consulta['TipoDeDocumento_IdTipDoc'];
    echo "<br> Nombre: ".$consulta['Nombre'];
    echo "<br> Número de identificación: ".$consulta['NumDoc'];
    echo "<br> Fecha de nacimiento: ".$consulta['FechaNac'];
    echo "<br> Celular: ".$consulta['Celular']."<br>";

  }
}
?> 
</body>
</html>