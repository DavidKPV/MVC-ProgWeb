<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/vista/logicavista/traerformulariobutton.php";

class moduloformulariobo{
	private $dao;
	private $vista;
	private $logicageneral;

	function __construct(){
		$this->vista=new vistaformulario();
	}

	function getformulario($r){
		return $this->vista->vistachida($r);
	}
}

?>