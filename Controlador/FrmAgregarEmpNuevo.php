<?php
require "../Modelo/Empleado.php";

$Conectarse = New Empleado();
$resultado = $Conectarse->MostrarDocumento();
//$objConexion = Conectarse();
//$Conectarse::Conectarse();
//$sql1 ="select IdTipDoc, TipoDocumento from tipodedocumento ";
//$resultado1 = $Conectarse->query($sql1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Agregar empleado</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="FrmAgregarEmpNuevo.css">
</head>

<body>
  <form id="form1" name="form1" method="post" action="ValidarAgregarEmpNuevo.php">
  <h3>
    <a class="button" href="Inicio.php">Cerrar sesión</a>
  </h3>
<center>
    <table  align="center">
      <tr>
        <td id="docum" colspan="2" align="center">Registro del empleado</td>
      </tr>
      <tr>
        <td id="nombr" align="right" >Nombre</td>
        <td><label for="Nombre"></label>
        <input required name="Nombre" type="text" id="Nombre" size="40" /></td>
      </tr>
      <tr>
        <td id="docu" align="right" >Tipo de documento</td>
        <td><label  for="TIPODEDOCUMENTO_IdTipDoc"></label>
  
          <select required name="TIPODEDOCUMENTO_IdTipDoc" id="TIPODEDOCUMENTO_IdTipDoc" size="0" style="width:318px" >
            <option  value="0">Seleccione</option>
            <?php 
            while ($TIPODEDOCUMENTO_IdTipDoc = $resultado->fetch_object()) {
            ?>
            <option value="<?php echo $TIPODEDOCUMENTO_IdTipDoc->IdTipDoc?>"><?php echo $TIPODEDOCUMENTO_IdTipDoc->TipoDocumento ?></option>
            <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
       <td id="nume" align="right" >Número de documento</td>
        <td><label for="NumDoc"></label>
          <input required name="NumDoc" type="text" id="NumDoc" size="40" /></td>
        </td>
      </tr>
      <tr>
       <td id="cel" align="right" >Celular</td>
        <td><label for="Celular"></label>
          <input required name="Celular" type="text" id="Celular" size="40" /></td>
      </tr>
      <tr>
        <td id="fecha" align="right" >Fecha de nacimiento</td>
        <td><label for="FechaNac"></label>
          <input id="nac" required name="FechaNac" type="date" id="FechaNac" size="40" /></td>
      </tr>
      <tr>
          <td id="esreg" class="button" colspan="2" align="center" ><input type="submit" name="button" id="butto" value="Enviar" /></td>
      </tr>
    </table>
    <a  class="button" href="JefeMenu.php"><input id="can" type="button" value="Cancelar"></a>
  </center>
  </form>
</body>

</html>