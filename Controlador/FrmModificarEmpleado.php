<?php
require "../Modelo/Empleado.php";
$NumDoc=$_REQUEST['NumDoc'];
$Conectarse2 = New Empleado();
$consulta = $Conectarse2->ConsultarEmpleado($NumDoc);
/*$sql1 ="select IdTipDoc, TipoDocumento from tipodedocumento ";
$resultado1 = $objConexion->query($sql1);*/
if ($consulta->num_rows==0) {
  echo '<script type="text/javascript">    alert("¡Empleado no encontrado!");  window.location.href="FrmConsModiEmpleado.php"  </script>';
}
//print_r ($consulta);
//var_dump($consulta->lengths);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Modificar empleado</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="FrmModificarEmpleado.css">
</head>

<body>
  <form id="form1" name="form1" method="post" action="ActualizarEmpleado.php">
  <h3>
    <a class="button" href="Inicio.php">Cerrar sesión</a>
  </h3>
<center>
    <table align="center">
      <tr>
        <td id="do" colspan="2" align="center" >Modificar empleado</td>
      </tr>
      <tr>
        </select></td><?php while ($recorrer = $consulta->fetch_object()) { ?>
        <td id="no" align="right" >Nombre</td>
        <td><label for="Nombre"></label>
          <input  required name="Nombre" value="<?php echo $recorrer->Nombre; ?>" type="text" id="Nombre" size="40" /></td>
        </td>
      <tr>
        <td  id="tipo" align="right">Tipo de documento</td>
        <td><label  for="TIPODEDOCUMENTO_IdTipDoc"></label>
          <!--<select required name="TIPODEDOCUMENTO_IdTipDoc" id="TIPODEDOCUMENTO_IdTipDoc" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">-->
            <input  type="text" disabled="disabled" value="<?php echo $recorrer->TipoDocumento; ?>">
            <!--<?php
            //while ($TIPODEDOCUMENTO_IdTipDoc = $resultado->fetch_object()) {
            /*?>
              <option value="<?php echo $TIPODEDOCUMENTO_IdTipDoc->IdTipDoc?>"><?php echo $TIPODEDOCUMENTO_IdTipDoc->TipoDocumento ?></option>
            <?php
            }*/

            ?>-->
          <!--</select>-->
      <tr>
       <td id="nu" align="right">Número de documento</td>
        <td><label for="NumDoc"></label>
          <input value="<?php echo $_REQUEST['NumDoc']; ?>" Disabled="disabled" required name="Oculto" type="text" id="NumDoc" size="40" /></td>
          <input value="<?php echo $_REQUEST['NumDoc']; ?>" required name="Docu" type="hidden" id="NumDoc" size="40" />
        </td>
      </tr>
            <tr>
       <td id="ce" align="right" >Celular</td>
        <td><label for="Celular"></label>
          <input value="<?php echo $recorrer->Celular; ?>" required name="Celular" type="text" id="Celular" size="40" /></td>
        </td>
      </tr>
       <tr>
        <td id="fe" align="right" >Fecha de nacimiento</td>
        <td><label for="FechaNac"></label>
          <input value="<?php echo $recorrer->FechaNac; }?>" Disabled="disabled" required name="FechaNac" type="date" id="FechaNac" size="40" /></td>
      </tr>
        </select>
        <tr>

        </tr>
        <tr>
          <td id="es" colspan="2" align="center" ><input id="actualizar" type="submit" name="BtmActualizar" value="Actualizar" /></td>
        </tr>
    </table>
    <tr>
    <a class="button" href="FrmConsModiEmpleado.php"><input id="cancelarr" type="button" value="Cancelar"></a>
  </center>
  </form>
  
</body>


</html>