<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/Vista/vistashtml/vistaslistado.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/listasdao.php";

class listadobo{
	var $varvista;
	var $dao;

	function __construct(){
		$this->dao=new mostrarlistadodao();
		$this->varvista=new vistalogica();
	}

	function fclistado ($datos){
		$objet = $this->dao->conectadaofin($datos);
		return $this->varvista->vista($objet);
	}
}

?>