<?php
require "../Modelo/conexion.php";



$objConexion = Conectarse();

$sql1 ="select IdTipDoc, TipoDocumento from tipodedocumento ";


$resultado1 = $objConexion->query($sql1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Modificar Empleado</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="Actualizar.php">
<center>
    <table width="40%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="#FFCC00">Modificar Empleado</td>
      </tr>
      <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Nombre</td>
        <td><label for="Nombre"></label>
          <input  required name="Nombre" type="text" id="Nombre" size="40" /></td>
        </td>
      <tr>
        <td  align="right" bgcolor="#EAEAEA">Tipo de documento</td>
        <td><label  for="TIPODEDOCUMENTO_IdTipDoc"></label>
          <select required name="TIPODEDOCUMENTO_IdTipDoc" id="TIPODEDOCUMENTO_IdTipDoc" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($TIPODEDOCUMENTO_IdTipDoc = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $TIPODEDOCUMENTO_IdTipDoc->IdTipDoc?>"><?php echo $TIPODEDOCUMENTO_IdTipDoc->TipoDocumento ?></option>
            <?php
            }

            ?>
          </select>
      <tr>
       <td align="right" bgcolor="#EAEAEA">Número de documento</td>
        <td><label for="NumDoc"></label>
          <input Disabled="disabled" required name="NumDoc" type="text" id="NumDoc" size="40" /></td>
        </td>
      </tr>
            <tr>
       <td align="right" bgcolor="#EAEAEA">Celular</td>
        <td><label for="Celular"></label>
          <input required name="Celular" type="text" id="Celular" size="40" /></td>
        </td>
      </tr>
       <tr>
        <td align="right" bgcolor="#EAEAEA">Fecha de nacimiento</td>
        <td><label for="FechaNac"></label>
          <input Disabled="disabled" required name="FechaNac" type="date" id="FechaNac" size="40" /></td>
      </tr>
        </select>
        <tr>

        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="BtmActualizar" value="Actualizar" /></td>
        </tr>
    </table>
    <tr>
    <a class="button" href="JefeMenu.php"><input type="button" value="Cancelar"></a>
  </center>
  </form>
  
</body>

</html>