<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/Vista/vistashtml/primerholamundo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/registradao.php";


class modulohola{
	private $vista;

	function __construct(){
		$this->vista=new primervistauno();
		$this->dao=new registradatosdao();
	}

	function retornamns($r){
		return $this->vista->vistafinal($r);
	}

	function funcionregistra($modulo){
		$mensaje=$this->dao->insertadatosdao($modulo);
		return $mensaje;
	}
}

?>