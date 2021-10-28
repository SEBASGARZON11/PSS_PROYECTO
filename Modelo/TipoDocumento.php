<?php
require_once(realpath(dirname(__FILE__)) . '/Jefe.php');

use Jefe;

class TipoDocumento {
	
	private $IdTipDoc;	
	private $TipoDocumento;

	public function TipoDocumento() {
		
	}

	public function getIdTipDoc() {
		return $this->IdTipDoc;
	}

	public function setIdTipDoc($IdTipDoc) {
		$this->IdTipDoc = $IdTipDoc;
	}

	public function getTipoDocumento() {
		return $this->TipoDocumento;
	}

	public function setTipoDocumento($TipoDocumento) {
		$this->TipoDocumento = $TipoDocumento;
	}

	$this->IdTipDoc=$IdTipDoc;
	$this->TipoDocumento=$TipoDocumento;	

	public function AgregarTipoDocumento() {
		$this->Conexion=Conectarse();
		$sql="insert into tipodedocumento(IdTipDoc, TipoDocumento)
		values ('$this->IdTipDoc','$this->TipoDocumento')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function EliminarTipoDocumento() {
		
	}

	public function ModificarTipoDocumento() {
		
	}

	public function ConsultarTipoDocumento() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM tipodedocumento WHERE IdTipDoc=$IdTipDoc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>