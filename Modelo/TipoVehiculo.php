<?php
require_once(realpath(dirname(__FILE__)) . '/Vehiculo.php');

use Vehiculo;

class TipoVehiculo {
	
	private $IdTipVehi;
	private $TipoVehiculo;
	private $Tarifa_idTarifa;
	private $Tarifa_Cobro_idCobro;


	public function TipoVehiculo() {
		
	}

	public function getIdTipVehi() {
		return $this->IdTipVehi;
	}

	public function setIdTipVehi($IdTipVehi) {
		$this->IdTipVehi = $IdTipVehi;
	}

	public function getTipoVehiculo() {
		return $this->TipoVehiculo;
	}

	public function setTipoVehiculo($TipoVehiculo) {
		$this->TipoVehiculo = $TipoVehiculo;
	}

	public function getTarifa_idTarifa() {
		return $this->Tarifa_idTarifa;
	}

	public function setTarifa_idTarifa($Tarifa_idTarifa) {
		$this->Tarifa_idTarifa = $Tarifa_idTarifa;
	}

	public function getTarifa_Cobro_idCobro() {
		return $this->Tarifa_Cobro_idCobro;
	}

	public function setTarifa_Cobro_idCobro($Tarifa_Cobro_idCobro) {
		$this->Tarifa_Cobro_idCobro = $Tarifa_Cobro_idCobro;
	}

	$this->IdTipVehi=$IdTipVehi;
	$this->TipoVehiculo=$TipoVehiculo;
	$this->Tarifa_idTarifa=$Tarifa_idTarifa;
	$this->Tarifa_Cobro_idCobro=$Tarifa_Cobro_idCobro;	

	public function AgregarTipoVehiculo() {
		$this->Conexion=Conectarse();
		$sql="insert into tipovehiculo(IdTipVehi, TipoVehiculo, Tarifa_idTarifa, Tarifa_Cobro_idCobro)
		values ('$this->IdTipVehi','$this->TipoVehiculo','$this->Tarifa_idTarifa','$this->Tarifa_Cobro_idCobro')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function EliminarTipoVehiculo() {
		
	}

	public function ConsultarTipoVehiculo() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM tipovehiculo WHERE IdTipVehi=$IdTipVehi";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function ModificarTipoVehiculo() {
		
	}

}
?>