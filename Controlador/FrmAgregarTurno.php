<?php
require "../Modelo/conexion.php";

$objConexion = Conectarse();

$sql1 ="select IdEmpleado, Nombre from empleado";
$sql2 ="select IdHorario, Horario from horario";

$resultado1 = $objConexion->query($sql1);
$resultado2 = $objConexion->query($sql2);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Agregar turnos</title>
  
</head>

<body>
  <form id="form1" name="form1" method="post" action="ValidarAgregarTurno.php">
<center>
    <table width="40%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="#FFCC00">Registro de turnos</td>
      </tr>
      <tr>
        <td  align="right" bgcolor="#EAEAEA">Seleccione tipo de turno</td>
        <td><label  for="Horario_IdHorario"></label>
          <select required name="Horario_IdHorario" id="Horario_IdHorario" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($Horario_IdHorario = $resultado2->fetch_object()) {
            ?>
              <option value="<?php echo $Horario_IdHorario->IdHorario?>"><?php echo $Horario_IdHorario->Horario ?></option>
            <?php
            }
            ?>
          </select>
        <tr>
        <td  align="right" bgcolor="#EAEAEA">Seleccione empleado</td>
        <td><label  for="Empleado_IdEmpleado"></label>
          <select required name="Empleado_IdEmpleado" id="Empleado_IdEmpleado" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($Empleado_IdEmpleado = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $Empleado_IdEmpleado->IdEmpleado?>"><?php echo $Empleado_IdEmpleado->Nombre ?></option>
            <?php
            }
            ?>
          </select>
<?php
date_default_timezone_set('America/Bogota');
$Fecha=date("y-m-d");
?>
       <tr>
        <td align="right" bgcolor="#EAEAEA">Fecha</td>
        <td><label for="Fecha"></label>
          <input required name="Fecha" type="datetime" id="Fecha" value="<?=$Fecha?>" size="40" /></td>
      </tr>
        </tr>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
    </table>
    <tr>
    <a class="button" href="JefeMenu.php"><input type="button" value="Cancelar"></a>
  </center>
  </form>
</body>

</html>