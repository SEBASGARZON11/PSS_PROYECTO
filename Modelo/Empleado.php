<?php
//require_once(realpath(dirname(__FILE__)) . '/Rol.php');
//require_once(realpath(dirname(__FILE__)) . '/TipoDocumento.php');
//require_once(realpath(dirname(__FILE__)) . '/Turno.php');
require "../Modelo/conexion.php";

//use Rol;
//use TipoDocumento;
//use Turno;

class Empleado {

	private $Conectar;
	private $IdEmpleado;
	private $Rol_idRol;
	private $TipoDeDocumento_IdTipDoc;
	private $Nombre;
	private $NumDoc;
	private $FechaNac;
	private $Celular;
	
	public function Empleado() {

		$this->Conectar = con::Conectarse();
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

	/*$this->IdEmpleado=$IdEmpleado;
	$this->Nombre=$Nombre;
	$this->NumDoc=$NumDoc;
	$this->FechaNac=$FechaNac;
	$this->Celular=$Celular;
	$this->Rol_idRol=$Rol_idRol;
	$this->TipoDeDocumento_IdTipDoc=$TipoDeDocumento_IdTipDoc;*/

	public function AgregarEmpleado($Nombre, $NumDoc, $FechaNac, $Celular, $TIPODEDOCUMENTO_IdTipDoc) {
		//$this->Conexion=Conectarse();
		$sql="insert into empleado(Nombre, NumDoc,FechaNac,Celular,TipoDeDocumento_IdTipDoc)
		values ('$Nombre','$NumDoc','$FechaNac','$Celular','$TIPODEDOCUMENTO_IdTipDoc')";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;	
	}

	public function MostrarDocumento() {
		$consulta = "select IdTipDoc, TipoDocumento from tipodedocumento ";
		$resultado=$this->Conectar->query($consulta);
		$this->Conectar->close();
		//$consulta->execute();
		return $resultado;
	}
	
	public function ModificarEmpleado($Nombre,$Celular,$NumDoc) {
		$sql="UPDATE empleado set Nombre = '$Nombre',Celular = '$Celular'WHERE NumDoc= '$NumDoc'";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;
	}

	public function EliminarEmpleado($Documento) {
		$sql="DELETE from empleado WHERE NumDoc = '$Documento' ";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;
	}

	public function ConsultarEmpleado($NumDoc) {
		$sql="select em.Nombre, tipdo.TipoDocumento, em.NumDoc, em.FechaNac, em.Celular 
  		from empleado as em inner JOIN tipodedocumento as tipdo
  		on em.TipoDeDocumento_IdTipDoc = tipdo.IdTipDoc
  		where NumDoc = $NumDoc";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;
	}

	public function ConsultarTodos () {
		$sql="select em.IdEmpleado, em.Nombre, tipdo.TipoDocumento, em.NumDoc, em.FechaNac, em.Celular 
		from empleado as em inner JOIN tipodedocumento as tipdo
		on em.TipoDeDocumento_IdTipDoc = tipdo.IdTipDoc";
		$resultado=$this->Conectar->query($sql);
		$this->Conectar->close();
		return $resultado;
	}


}
?>