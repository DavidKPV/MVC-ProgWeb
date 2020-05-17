<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/beans/botonformulario.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/listado/traerfuncionlistado.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/conexion.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/procesaparametros.php";

class mostrarlistadodao{

	private $con;

	function __construct(){
		$this->con=conexion::conectar();
	}

	function __destruct(){
		$this->con->close();
	}
/*
	function obtenercantidad(){
		$pp=listasql::traerfuncioncantidad();
		$query=$this->con->query($pp);
		$listas=new objetolistado();

		$row=$query->fetch_array();
			
		$listas->id=$row['id'];
		$listas->nombre=$row['nombre'];

		return $listas;
	}
*/
	function conectadaofin(){
		$pp=listasql::traerfuncionlistado();
		$query=$this->con->query($pp);
		$listas=new objetolistado();

		$row=$query->fetch_array();
			
		$listas->id=$row['id'];
		$listas->nombre=$row['nombre'];

		return $listas;
	}

}

?>