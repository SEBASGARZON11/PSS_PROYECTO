<?php
require_once(realpath(dirname(__FILE__)) . '/Registro.php');

use Registro;

class Cobro {

	private $idCobro;
	private $TiempoTotal;
	private $Cobro;

	public function Cobro() {
		
	}

	public function getidCobro() {
		return $this->idCobro;
	}

	public function setidCobro(idCobro) {
		$this->idCobro = $idCobro;
	}

	public function getTiempoTotal() {
		return $this->TiempoTotal;
	}

	public function setTiempoTotal(TiempoTotal) {
		$this->TiempoTotal = $TiempoTotal;
	}

	public function getCobro() {
		return $this->Cobro;
	}

	public function setCobro($Cobro) {
		$this->Cobro = $Cobro;
	}

	$this->idCobro=$idCobro;
	$this->TiempoTotal=$TiempoTotal;
	$this->Cobro=$Cobro;

	public function AgregarCobro() {
		$this->Conexion=Conectarse();
		$sql="insert into cobro(idCobro, TiempoTotal, Cobro)
		values ('$this->idCobro','$this->TiempoTotal','$this->Cobro')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function EliminarCobro() {
		
	}

	public function ConsultarCobro() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM cobro WHERE idCobro=$idCobro ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function ModificarCobro() {
		
	}
}
?>