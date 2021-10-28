<?php
/*require_once(realpath(dirname(__FILE__)) . '/Contraseña.php');
require_once(realpath(dirname(__FILE__)) . '/Clave.php');
require_once(realpath(dirname(__FILE__)) . '/Rol.php');
require_once(realpath(dirname(__FILE__)) . '/TipoDocumento.php');*/
require "../Modelo/conexion.php";

/*use Contraseña;
use Clave;
use Rol;
use TipoDocumento;*/

class Jefe {

	private $Conectar;
	private $IdJefe;
	private $Nombre;
	private $NumDoc;
	private $Clave_IdClave;
	private $Contraseña_IdContraseña;
	private $Rol_idRol;
	private $TipoDeDocumento_IdTipDoc;

	public function Jefe() {
		$this ->Conectar = con::Conectarse();
	}

	public function getIdJefe() {
		return $this->IdJefe;
	}

	public function setIdJefe($IdJefe) {
		$this->IdJefe = $IdJefe;
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

	public function getClave_IdClave() {
		return $this->Clave_IdClave;
	}

	public function setClave_IdClave($Clave_IdClave) {
		$this->Clave_IdClave = $Clave_IdClave;
	}

	public function getContraseña_IdContraseña() {
		return $this->Contraseña_IdContraseña;
	}

	public function setContraseña_IdContraseña($Contraseña_IdContraseña) {
		$this->Contraseña_IdContraseña = $Contraseña_IdContraseña;
	}

	public function getRol_idRol() {
		return $this->Rol_idRol;
	}

	/*public function setIdJefe($Rol_idRol) {
		$this->Rol_idRol = $Rol_idRol;
	}*/

	public function getTipoDeDocumento_IdTipDoc() {
		return $this->TipoDeDocumento_IdTipDoc;
	}

	public function setTipoDeDocumento_IdTipDoc($TipoDeDocumento_IdTipDoc) {
		$this->TipoDeDocumento_IdTipDoc = $TipoDeDocumento_IdTipDoc;
	}

	/*$this->IdJefe=$IdJefe;
	$this->Nombre=$Nombre;
	$this->NumDoc=$NumDoc;
	$this->Clave_IdClave=$Clave_IdClave;
	$this->Contraseña_IdContraseña=$Contraseña_IdContraseña;
	$this->Rol_idRol=$Rol_idRol;
	$this->TipoDeDocumento_IdTipDoc=$TipoDeDocumento_IdTipDoc;*/

	public function AgregarJefe($Nombre,$NumDoc,$Contraseña,$TIPODEDOCUMENTO_IdTipDoc) {
		//$this->Conexion=Conectarse();
		$MD5=md5($Contraseña);
		$sql="insert into jefe(Nombre, NumDoc ,Contraseña ,TipoDeDocumento_IdTipDoc)
		values ('$Nombre','$NumDoc','$MD5','$TIPODEDOCUMENTO_IdTipDoc')";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;	
	}

	public function MostrarDoc() {
		$consulta = "select IdTipDoc, TipoDocumento from tipodedocumento ";
		$resultado=$this ->Conectar->query($consulta);
		$this->Conectar->close();
		return $resultado;
	}

	public function EliminarJefe() {
		
	}

	public function ConsultarJefe() {
		$this->Conexion=Conectarse();
		$sql="SELECT * FROM jefe WHERE IdJefe=$IdJefe";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}

	public function ModificarJefe() {
		
	}
}

?>