<?php
require_once(realpath(dirname(__FILE__)) . '/Jefe.php');

use Jefe;

class Clave {
	
	private $IdClave;
	private $Clave;

	public function Clave() {
		
	}

	public function getIdClave() {
		return $this->IdClave;
	}

	public function setIdClave($IdClave) {
		$this->IdClave = $IdClave;
	}

	public function getClave() {
		return $this->Clave;
	}

	public function setClave($Clave) {
		$this->Clave = $Clave;
	}

	$this->IdClave=$IdClave;
	$this->Clave=$Clave;

	public function AgregarClave() {
		$this->Conexion=Conectarse();
		$sql="insert into clave(IdClave, Clave)
		values ('$this->IdClave','$this->Clave')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function EliminarClave() {
		
	}

	public function ConsultarClave() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM clave WHERE IdClave=$IdClave ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function ModificarClave() {
		
	}
}
?>