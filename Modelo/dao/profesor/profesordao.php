<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/profesor/profesorsql.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/conexion.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/procesaparametros.php";

class profesordao{
	private $con;
	private $mensaje;

	function __construct(){
		$this->con=conexion::conectar();
	}

	function __destruct(){
		$this->con->close();
	}

	function insertar($modulo){
		$formulario=new formulario();
		$datosarray=array($modulo->nombre);
		$pp=procesaparametros::PrepareStatement(profesorsql::registraprofesor(), $datosarray);
		$query=$this->con->query($pp);
	}
}

?>