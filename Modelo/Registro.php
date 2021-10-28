<?php
/*require_once(realpath(dirname(__FILE__)) . '/Vehiculo.php');
require_once(realpath(dirname(__FILE__)) . '/Cobro.php');
use Vehiculo;
use Cobro;*/
require "../Modelo/conexion.php";

class Registro {

	private $Conectar;
	private $IdRegistro;
	private $FechaIngreso;
	private $FechaSalida;
	private $HoraIngreso;
	private $HoraSalida;
	private $Vehiculo_IdVehículo;
	private $Empleado_IdEmpleado;

	public function Registro() {
		$this->Conectar = co::Conectarse();
	}

	public function getIdRegistro() {
		return $this->IdRegistro;
	}

	public function setIdRegistro($IdRegistro) {
		$this->IdRegistro = $IdRegistro;
	}

	public function getFechaIngreso() {
		return $this->FechaIngreso;
	}

	public function setFechaIngreso($FechaIngreso) {
		$this->FechaIngreso = $FechaIngreso;
	}

	public function getFechaSalida() {
		return $this->FechaSalida;
	}

	public function setFechaSalida($FechaSalida) {
		$this->FechaSalida = $FechaSalida;
	}

	public function getHoraIngreso() {
		return $this->HoraIngreso;
	}

	public function setHoraIngreso($HoraIngreso) {
		$this->HoraIngreso = $HoraIngreso;
	}

	public function getHoraSalida() {
		return $this->HoraSalida;
	}

	public function setHoraSalida($HoraSalida) {
		$this->HoraSalida = $HoraSalida;
	}

	public function getVehiculo_IdVehículo() {
		return $this->Vehiculo_IdVehículo;
	}

	public function setVehiculo_IdVehículo($Vehiculo_IdVehículo) {
		$this->Vehiculo_IdVehículo = $Vehiculo_IdVehículo;
	}

	public function getEmpleado_IdEmpleado() {
		return $this->Empleado_IdEmpleado;
	}

	public function setEmpleado_IdEmpleado($Empleado_IdEmpleado) {
		$this->Empleado_IdEmpleado = $Empleado_IdEmpleado;
	}

	/*$this->idRegistro=$idRegistro;
	$this->FechaIngreso=$FechaIngreso;
	$this->FechaSalida=$FechaSalida;
	$this->HoraIngreso=$HoraIngreso;
	$this->HoraSalida=$HoraSalida;
	$this->Vehiculo_IdVehículo=$Vehiculo_IdVehículo;
	$this->Empleado_IdEmpleado=$Empleado_IdEmpleado;*/

	public function AgregarRegistro($TipoVehiculo_IdTipVehi,$Empleado_IdEmpleado,$FechaIngreso,$HoraIngreso,$Placa) {
		//$this->Conexion=Conectarse,$Empleado_IdEmpleado,$FechaIngreso,$HoraIngreso,$Placa();
		$sql="insert into registro(FechaIngreso, HoraIngreso,TipoVehiculo_IdTipVehi,Empleado_IdEmpleado, Placa)
		values ($TipoVehiculo_IdTipVehi,$Empleado_IdEmpleado,$FechaIngreso,$HoraIngreso, $Placa)";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;
	}

	public function MostrarDocumento() {
		$consulta = "select IdEmpleado, Nombre from empleado ";
		$resultado=$this->Conectar->query($consulta);
		$this->Conectar->close();
		//$consulta->execute();
		return $resultado;
	}
	public function MostrarVehiculo() {
		$consulta = "select IdTipVehi, TipoVehiculo from tipovehiculo ";
		$resultado=$this->Conectar->query($consulta);
		$this->Conectar->close();
		//$consulta->execute();
		return $resultado;
	}

	public function EliminarRegistro() {
		
	}

	public function ModificarRegistro() {
		
	}

	public function ConsultarRegistro() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM registro WHERE idRegistro=$idRegistro";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}

?>