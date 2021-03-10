<?php
require "../Modelo/conexion.php";



$objConexion = Conectarse();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<?php 

    $Nombre =$_POST['Nombre'];
    $TIPODEDOCUMENTO_IdTipDoc =$_POST['TIPODEDOCUMENTO_IdTipDoc'];
    $NumDoc =$_POST['NumDoc'];
    $Celular =$_POST['Celular'];
    $FechaNac =$_POST['FechaNac'];

    mysqli_query($objConexion,"UPDATE empleado set Nombre = '$Nombre',TIPODEDOCUMENTO_IdTipDoc = '$TIPODEDOCUMENTO_IdTipDoc', Celular = '$Celular', FechaNac= '$FechaNac'WHERE NumDoc= '$NumDoc'")
    or die ("Error al Actualizar los Datos");
    echo "Datos Actualizados Correctamente";

	 ?>

</body>
</html>