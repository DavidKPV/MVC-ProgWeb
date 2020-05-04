<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/objetohola.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/registrasql.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/conexion.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/procesaparametros.php";

class registradatosdao{
	private $con;

	function __construct(){
		$this->con=conexion::conectar();
	}

	function __destruct(){
		$this->con->close();
	}

	function insertadatosdao($modulo){
		$datosarray=($modulo->nombre);
		$pp=procesaparametros::PrepareStatement(registrasql::fregistradatos(),$datosarray);
		$query=$this->con->query($pp);
	    return $query;
	}
}

?>