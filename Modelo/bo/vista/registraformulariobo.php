<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/vista/logicavista/traerformulariobutton.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/profesor/profesordao.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/listado/listadao.php";

class formularioregistra{
	private $dao;
	private $vista;
	private $logicageneral;

	function __construct(){
		$this->dao=new profesordao();
		$this->vista=new vistaformulariobutton();
	}

	function formularioregistra($r){
		return $this->vista->vistaregistra($r);
	}

	function formularioregistraprofesor($modulo){
		$mensaje=$this->dao->insertar($modulo);
		return $mensaje;
	}
}

class modulodelistado{
	private $vista;
	var $dao;

	function __construct(){
		$this->dao=new mostrarlistadodao();
		$this->vista= new vistaformulariobutton();
	}

	function listado($id){
		$objet = $this->dao->conectadaofin($id);
		return $this->vista->vistadatos($objet);
	}

}

?>