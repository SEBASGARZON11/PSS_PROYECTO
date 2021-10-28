<?php
require_once(realpath(dirname(__FILE__)) . '/Cobro.php');

use Cobro;

class Tarifa {
	
	private $idTarifa;
	private $Tarifa;
	private $Cobro_idCobro;

	public function Tarifa() {
		
	}

	public function getidTarifa() {
		return $this->idTarifa;
	}

	public function setidTarifa($idTarifa) {
		$this->idTarifa = $idTarifa;
	}

	public function getTarifa() {
		return $this->Tarifa;
	}

	public function setidTarifa($Tarifa) {
		$this->Tarifa = $Tarifa;
	}

	public function getCobro_idCobro() {
		return $this->Cobro_idCobro;
	}

	public function setCobro_idCobroa($Cobro_idCobro) {
		$this->Cobro_idCobro = $Cobro_idCobro;
	}

	$this->idTarifa=$idTarifa;
	$this->Tarifa=$Tarifa;
	$this->Cobro_idCobro=$Cobro_idCobro;

	public function AgregarTarifa() {
		$this->Conexion=Conectarse();
		$sql="insert into tarifa(idTarifa, Tarifa, Cobro_idCobro)
		values ('$this->idTarifa','$this->Tarifa','$this->Cobro_idCobro')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function EliminarTarifa() {
		
	}

	public function ModificarTarifa() {
		
	}

	public function ConsultarTarifa() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM tarifa WHERE idRol=$idRol";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

}
?>