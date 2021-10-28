<?php  
require "../Modelo/Empleado.php";

$Conectarse = New Empleado();
//$resultado = $Conectarse->ConsultarEmpleado();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Consultar empleados</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="FrmConsultarEmp.css">
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<h3>
  <a class="button" href="Inicio.php">Cerrar sesión</a>
</h3>
  <center>
    <table  align="center">
    <tr>
    <td id="documento" colspan="2" align="center" >Consultar empleados</td>
    </tr>
    <tr>
      <td id="numero" width="37%" align="right" >Número de documento</td>
      <td width="63%"><label for="NumDoc"></label>
      <input title="Ingrese su numero de documento sin puntos ni comas" name="NumDoc" type="int" id="NumDoc" size="40" required="" /></td>
    </tr>
    <tr>
 <tr>
   </tr>
      <tr>
      <td id="espacio" colspan="2" align="center" ><input id="uno" type="submit" name="btnConsultar" value="Consultar un empleado" /></td>
      <tr>
    </tr>
    <tr>
    </tr> 
  </table>
  <tr>
  <a class="button" href="JefeMenu.php"><input id="cancel" type="button" value="Cancelar"></a>
</center>
 </form>
 <?php



if (isset($_POST['btnConsultar']))
{
  $NumDoc = $_POST["NumDoc"];
  $Conectar = new Empleado();
  $funcion = $Conectar ->ConsultarEmpleado($NumDoc);

  while ($resultados=$funcion->fetch_object()){
    echo "Nombre: ".$resultados->Nombre."<br>";
    echo "Tipo de documento: ".$resultados->TipoDocumento."<br>";
    echo "Número de documento: ".$resultados->NumDoc."<br>";
    echo "Fecha de nacimiento: ".$resultados->FechaNac."<br>";
    echo "Celular: ".$resultados->Celular;
  }
  /*while ($consulta = mysqli_fetch_array($resultados))   
  {
    echo "<br> Nombre: ".$consulta['Nombre']; 
    echo "<br> Tipo de documento: ".$consulta['TipoDocumento'];
    echo "<br> Número de Identificación: ".$consulta['NumDoc'];
    echo "<br> Fecha de nacimiento: ".$consulta['FechaNac'];
    echo "<br> Celular: ".$consulta['Celular']."<br>";
  }*/
}
?> 
 <form id="form1" name="form1" method="post" action="">
<br>
  <td colspan="2" align="center" ><input id="todos" type="submit" name="btnConsultarTodo" value="Consultar todos" /></td>
</form>

  <?php

if (isset($_POST['btnConsultarTodo']))
{
  $funcion2=$Conectarse->ConsultarTodos();
  while ($consulta= $funcion2 ->fetch_object())   
  {
    echo " Identificador: ".$consulta->IdEmpleado."<br>";
    echo " Nombre: ".$consulta->Nombre."<br>";
    echo " Tipo de documento: ".$consulta->TipoDocumento."<br>";
    echo " Número de documento: ".$consulta->NumDoc."<br>";
    echo " Fecha de nacimiento: ".$consulta->FechaNac."<br>";
    echo " Celular: ".$consulta->Celular."<br><br>";

  }
}
?> 
</body>

</html>