<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/Vista/vistashtml/holavista.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/listasdao.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/registradao.php";


class moduloholabo{
	private $vista;
	var $dao;
	var $registro;

	function __construct(){
		$this->vista=new holavista();
		$this->dao=new mostrarlistadodao();
		$this->registro=new registradatosdao();
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

	function retornamns($r){
		return $this->vista->funcionvistaformulario($r);
	}

	function funcionregistra($nombre){
		$mensaje=$this->registro->insertadatosdao($nombre);
		return $mensaje;
	}
}

?>