<?php  
require "../Modelo/Registro.php";
$Conectarse = New Registro();
$resultado = $Conectarse->MostrarDocumento();
$Conectarse2 = New Registro();
$resultado = $Conectarse2->MostrarVehiculo();
/*$objConexion = Conectarse();
$sql1 ="select IdTipVehi, TipoVehiculo from tipovehiculo ";
$sql2 ="select IdEmpleado, Nombre from empleado ";
$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Registro</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="validarAgregarRegis.php">
<center>
    <table width="42%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="#FFCC00">REGISTRO</td>
      </tr>
      <tr>
      <tr>
            <td  align="right" bgcolor="#EAEAEA">Empleado</td>
        <td><label  for="Empleado_IdEmpleado"></label>
          <select required name="Empleado_IdEmpleado" id="Empleado_IdEmpleado" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($Empleado_IdEmpleado = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $Empleado_IdEmpleado->IdEmpleado?>"><?php echo $Empleado_IdEmpleado->Nombre ?></option>
            <?php
            }

            ?>
          </select>
      <tr>

      <tr>
            <td  align="right" bgcolor="#EAEAEA">Tipo de vehículo</td>
        <td><label  for="TipoVehiculo_IdTipVehi"></label>
          <select required name="TipoVehiculo_IdTipVehi" id="TipoVehiculo_IdTipVehi" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($TipoVehiculo_IdTipVehi = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $TipoVehiculo_IdTipVehi->IdTipVehi?>"><?php echo $TipoVehiculo_IdTipVehi->TipoVehiculo ?></option>
            <?php
            }

            ?>
          </select>
      <tr>
<?php
date_default_timezone_set('America/Bogota');
$FechaIngreso=date("y-m-d");
date_default_timezone_set('America/Bogota');
$HoraIngreso=date("h:i:s");
?>
        <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Fecha</td>
        <td><label for="FechaIngreso"></label>
          <input required name="FechaIngreso" type="datetime" id="FechaIngreso" value="<?=$FechaIngreso?>" size="40" /></td>
        </td>

      <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Hora</td>
        <td><label for="HoraIngreso"></label>
          <input required name="HoraIngreso" type="datetime" id="HoraIngreso" value="<?=$HoraIngreso?>" size="40" /></td>
        </td>

      <tr>
        <td align="right" bgcolor="#EAEAEA">Placa</td>
        <td><label for="Placa"></label>
          <input required name="Placa" type="text" id="Placa" size="40" /></td>
      </tr>
        </td>
        <tr>

        </tr>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
    <tr>
    <a class="button" href="EmpMenu.php"><input type="button" value="Cancelar"></a>
  </center>
  </form>
</body>

</html>