<?php
require "../Modelo/Jefe.php";

$Conectarse = New Jefe(); 
$resultado1 = $Conectarse->MostrarDoc();
//$objConexion = Conectarse();
//$sql1 ="select IdTipDoc, TipoDocumento from tipodedocumento ";
//$resultado1 = $objConexion->query($sql1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Registro de administrador</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="FrmAgregarJefe.css">
  <script type="text/javascript">
  var Confirmar=function(){
    var contrase=document.getElementById('Contraseña').value;
    var nombre=document.getElementById('Nombre').value;
    var documento=document.getElementById('TIPODEDOCUMENTO_IdTipDoc').value;
    var numDoc=document.getElementById('NumDoc').value;
    
    if (document.getElementById('Contraseña').value==document.getElementById('Confirmacion').value && (contrase.length>0) && (nombre.length>0) && (documento!= 0) && (numDoc.length>0)){
      document.getElementById('button').disabled=false;
    }else{
      document.getElementById('button').disabled=true;
    }
  }
</script>
</head>

<body>
  <form id="form1" name="form1" method="post" action="validarAgregarJefe.php">
<center>
    <table  align="center">
      <tr>
        <td id="docum"colspan="2" align="center">Registro de administrador</td>
      </tr>
      <tr>
        <td id="nombre" align="right">Nombre</td>
        <td><label for="Nombre"></label>
          <input onkeyup='Confirmar();' required name="Nombre" type="text" id="Nombre" size="40" />
        </td>
      <tr>
        <td  id="doc" align="right" >Tipo de documento</td>
        <td><label  for="TIPODEDOCUMENTO_IdTipDoc"></label>
          <select onchange='Confirmar();' required name="TIPODEDOCUMENTO_IdTipDoc" id="TIPODEDOCUMENTO_IdTipDoc" size="0" style="width:318px" title="Ficha en la que se encuentra el aprendiz">
            <option  value="0">Seleccione</option>
            <?php
            while ($TIPODEDOCUMENTO_IdTipDoc = $resultado1->fetch_object()) {
            ?>
              <option value="<?php echo $TIPODEDOCUMENTO_IdTipDoc->IdTipDoc?>"><?php echo $TIPODEDOCUMENTO_IdTipDoc->TipoDocumento ?></option>
            <?php
            }

            ?>
          </select>
        </td>
      </tr>
      <tr>
       <td id="num" align="right">Número de documento</td>
        <td><label for="NumDoc"></label>
          <input onkeyup='Confirmar();' required name="NumDoc" type="text" id="NumDoc" size="40" />
        </td>
      </tr>
      <tr>
       <td id="con" align="right">Contraseña</td>
        <td><label for="Contraseña"></label>
          <input onkeyup='Confirmar();' required name="Contraseña" type="password" id="Contraseña" size="40" />
        </td>
      </tr>
      <tr>
       <td id="pass" align="right">Confirmar contraseña</td>
        <td><label for="Contraseña"></label>
          <input onkeyup='Confirmar();' required name="Contraseña" type="password" id="Confirmacion" size="40" />
        </td>
      </tr>
      <tr>
          <td id="esreg" colspan="2" align="center"><input type="submit" name="button" id="button" value="Registrar" disabled="disabled" /></td>
      </tr>
    </table>
    <a class="button" href="Inicio.php"><input id="cancelar" type="button" value="Cancelar"></a>
  </center>
  </form>

</body>
</html>