<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/Vista/vistashtml/holavista.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/listasdao.php";


class moduloholabo{
	private $vista;
	var $dao;

	function __construct(){
		$this->vista=new holavista();
		$this->dao=new mostrarlistadodao();
	}

	function funcionholabo($r){
		return $this->vista->funcionvistafinal($r);
	}

	function funcionimgbo($r){
		return $this->vista->funcionvistaimgfinal($r);
	}

	function fclistado ($datos){
		$objet = $this->dao->conectadaofin($datos);
		return $this->vista->funcionvistasql($objet);
	}
}

?>