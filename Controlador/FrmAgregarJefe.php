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
  <title>Registro de administrador</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="validarAgregarJefe.php">
<center>
    <table width="40%" border="3" align="center">
      <tr>
        <td colspan="2" align="center" bgcolor="#FFCC00">Registro de administrador</td>
      </tr>
      <tr>
        </select></td>
        <td align="right" bgcolor="#EAEAEA">Nombre</td>
        <td><label for="Nombre"></label>
          <input required name="Nombre" type="text" id="Nombre" size="40" /></td>
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
          <input required name="NumDoc" type="text" id="NumDoc" size="40" /></td>
        </td>
      </tr>
            <tr>
       <td align="right" bgcolor="#EAEAEA">Contraseña</td>
        <td><label for="Contraseña"></label>
          <input required name="Contraseña" type="text" id="Contraseña" size="40" /></td>
        </td>
      </tr>
           <tr>
       <td align="right" bgcolor="#EAEAEA">Confirmar contraseña</td>
        <td><label for="Contraseña"></label>
          <input required name="Contraseña" type="text" id="Contraseña" size="40" /></td>
        </td>
      </tr>
        <tr>
          <td class="button" colspan="2" align="center" bgcolor="#FFCC00"><input type="submit" name="button" id="button" value="Registrar" /></td>
        </tr>
    </table>
    <tr>
    <a class="button" href="Inicio.php"><input type="button" value="Cancelar"></a>
  </center>
  </form>
    <tr>
    <a class="button" href="JefeMenu.php"><input type="button" value="Menú"></a>
</body>

</html>