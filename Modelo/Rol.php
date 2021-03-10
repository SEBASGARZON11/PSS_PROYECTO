<?php
require_once(realpath(dirname(__FILE__)) . '/Jefe.php');
require_once(realpath(dirname(__FILE__)) . '/Empleado.php');

use Jefe;
use Empleado;

class Rol {
	
	private $idRol;	
	private $Rol	;
	
	public function Rol() {
		
	}

	public function getidRol() {
		return $this->idRol;
	}

	public function setidRol($idRol) {
		$this->idRol = $idRol;
	}

	public function getRol() {
		return $this->Rol	;
	}

	public function setRol($Rol	) {
		$this->Rol = $Rol	;
	}

	$this->idRol=$idRol;
	$this->Rol=$Rol;

	public function AgregarRol() {
		$this->Conexion=Conectarse();
		$sql="insert into rol(idRol, Rol)
		values ('$this->idRol','$this->Rol')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function EliminarRol() {
		
	}

	public function ConsultarRol() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM rol WHERE idRol=$idRol";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function ModificarRol() {
		
	}
}
?>