<!DOCTYPE html>
<html>
<head>
	<title>Modificar empleado</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="FrmConsModiEmpleado.css">
</head>
<body>
  <form id="form1" name="form1" method="post" action="FrmModificarEmpleado.php">
  <h3>
    <a class="button" href="Inicio.php">Cerrar sesión</a>
  </h3>
<center>
    <table align="center">
      <tr>
        <td id="docuemnt" colspan="2" align="center" >Modificar empleado</td>
      </tr>
      <tr>
      <td id="numer" align="right" >Número de documento</td>
      <td><label for="NumDoc"></label>
      <input required name="NumDoc" type="text" id="NumDoc" size="40" /></td>
      </tr>
      <tr>
        <td id="espaci" colspan="2" align="center" ><input id="buscar" type="submit" name="BtmActualizar" value="Buscar" /></td>
      </tr>
    </table>
    <a class="button" href="JefeMenu.php"><input id="cancela" type="button" value="Cancelar"></a>
  </center>
  </form>

</body>
</html>