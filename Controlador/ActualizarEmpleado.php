
<?php
require "../Modelo/Empleado.php";

$Clase = new Empleado();

    $Nombre =$_POST['Nombre'];
    //$TIPODEDOCUMENTO_IdTipDoc =$_POST['TIPODEDOCUMENTO_IdTipDoc'];
    $NumDoc =$_POST['Docu'];
    $Celular =$_POST['Celular'];
    //$FechaNac =$_POST['FechaNac'];
    
    $fun = $Clase->ModificarEmpleado($Nombre,$Celular,$NumDoc);
    if ($fun) {
    	echo "Datos Actualizados Correctamente";
    }
    else {
    	echo "Error al Actualizar los Datos";
    }
    //or die ("Error al Actualizar los Datos");
    //echo "Datos Actualizados Correctamente";

?>


