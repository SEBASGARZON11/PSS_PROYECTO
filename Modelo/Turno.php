<?php
require_once(realpath(dirname(__FILE__)) . '/Empleado.php');

use Empleado;

class Turno {
	
	private $idTurno;
	private $Turno;
	private $Duracion;
	private $Fecha;
	private $Empleado_Rol_idRol;
	private $Empleado_IdEmpleado;

	public function Turno() {
		
	}
	public function getidTurno() {
		return $this->idTurno;
	}

	public function setidTurno($idTurno) {
		$this->idTurno = $idTurno;
	}

	public function getTurno() {
		return $this->Turno;
	}

	public function setTurno($Turno) {
		$this->Turno = $Turno;
	}

	public function getDuracion() {
		return $this->Duracion;
	}

	public function setDuracion($Duracion) {
		$this->Duracion = $Duracion;
	}

	public function getFecha() {
		return $this->Fecha;
	}

	public function setFecha($Fecha) {
		$this->Fecha = $Fecha;
	}

	public function getEmpleado_Rol_idRol() {
		return $this->Empleado_Rol_idRol;
	}

	public function setEmpleado_Rol_idRol($Empleado_Rol_idRol) {
		$this->Empleado_Rol_idRol = $Empleado_Rol_idRol;
	}

	public function getEmpleado_IdEmpleado() {
		return $this->Empleado_IdEmpleado;
	}

	public function setEmpleado_IdEmpleado($Empleado_IdEmpleado) {
		$this->Empleado_IdEmpleado = $Empleado_IdEmpleado;
	}

	$this->idTurno=$idTurno;
	$this->Turno=$Turno;
	$this->Duracion=$Duracion;
	$this->Fecha=$Fecha;	
	$this->Empleado_Rol_idRol=$Empleado_Rol_idRol;
	$this->Empleado_IdEmpleado=$Empleado_IdEmpleado;

	public function AgregarTurno() {
		$this->Conexion=Conectarse();
		$sql="insert into turno(idTurno, Turno, Duracion, Fecha, Empleado_Rol_idRol, Empleado_IdEmpleado)
		values ('$this->idTurno','$this->Turno','$this->Duracion','$this->Fecha','$this->Empleado_Rol_idRol','$this->Empleado_IdEmpleado')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function EliminarTurno() {
		
	}

	public function ModificarTurno() {
		
	}

	public function ConsultarTurno() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM turno WHERE idTurno=$idTurno";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

}
?>