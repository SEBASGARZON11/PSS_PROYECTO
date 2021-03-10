<?php
require_once(realpath(dirname(__FILE__)) . '/Rol.php');
require_once(realpath(dirname(__FILE__)) . '/TipoDocumento.php');
require_once(realpath(dirname(__FILE__)) . '/Turno.php');

use Rol;
use TipoDocumento;
use Turno;

class Empleado {

	private $IdEmpleado;
	private $Rol_idRol;
	private $TipoDeDocumento_IdTipDoc;
	private $Nombre;
	private $NumDoc;
	private $FechaNac;
	private $Celular;
	
	public function Empleado() {
		
	}

	public function getIdEmpleado() {
		return $this->IdEmpleado;
	}

	public function setIdEmpleado($IdEmpleado) {
		$this->IdEmpleado = $IdEmpleado;
	}

	public function getNombre() {
		return $this->Nombre;
	}

	public function setNombre($Nombre) {
		$this->Nombre = $Nombre;
	}

	public function getNumDoc() {
		return $this->NumDoc;
	}

	public function setNumDoc($NumDoc) {
		$this->NumDoc = $NumDoc;
	}

	public function getFechaNac() {
		return $this->FechaNac;
	}

	public function setFechaNac($FechaNac) {
		$this->FechaNac = $FechaNac;
	}

	public function getCelular() {
		return $this->Celular;
	}

	public function setCelular($Celular) {
		$this->Celular = $Celular;
	}

	public function getRol_idRol() {
		return $this->Rol_idRol;
	}

	public function setRol_idRol($Rol_idRol) {
		$this->Rol_idRol = $Rol_idRol;
	}

	public function getTipoDeDocumento_IdTipDoc() {
		return $this->TipoDeDocumento_IdTipDoc;
	}

	public function setTipoDeDocumento_IdTipDoc($TipoDeDocumento_IdTipDoc) {
		$this->TipoDeDocumento_IdTipDoc = $TipoDeDocumento_IdTipDoc;
	}

	$this->IdEmpleado=$IdEmpleado;
	$this->Nombre=$Nombre;
	$this->NumDoc=$NumDoc;
	$this->FechaNac=$FechaNac;
	$this->Celular=$Celular;
	$this->Rol_idRol=$Rol_idRol;
	$this->TipoDeDocumento_IdTipDoc=$TipoDeDocumento_IdTipDoc;

	public function AgregarEmpleado() {
		$this->Conexion=Conectarse();
		$sql="insert into empleado(IdEmpleado, Nombre, NumDoc,FechaNac,Celular,Rol_idRol,TipoDeDocumento_IdTipDoc)
		values ('$this->IdEmpleado','$this->Nombre','$this->NumDoc','$this->FechaNac','$this->Celular','$this->Rol_idRol','$this->TipoDeDocumento_IdTipDoc')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ModificarEmpleado() {
		
	}

	public function EliminarEmpleado() {
		
	}

	public function ConsultarEmpleado() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM empleado WHERE IdEmpleado=$IdEmpleado";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>