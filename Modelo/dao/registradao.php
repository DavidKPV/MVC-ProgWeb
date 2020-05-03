<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/registrasql.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/conexion.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/procesaparametros.php";

class registradatosdao{
	private $con;

	function _construct(){
		$this->con->close();
	}

	function _destruct(){
		$this->con->close();
	}

	function insertadatosdao($modulo){
		$datosarray=array($modulo->vnombre);
		$pp=procesaparametros::PrepareStatement(registrasql::fregistradatos(),$datosarray);
		$query=$this->con->query($pp);
	}
}

?>