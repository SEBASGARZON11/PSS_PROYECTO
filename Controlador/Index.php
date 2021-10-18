<?php

include_once 'includes/User.php';
include_once 'includes/UserSesion.php';

$usersession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) {
	echo "Hay sesión";
}else if (isset($_POST['username']) && isset($_POST['password'])) {
echo "Validacion de login";
}else{
	echo "login";
	include_once 'controlador/InicioSesionJefe.php';
}


?>