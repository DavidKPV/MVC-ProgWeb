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

	function conectadaofin($id){
		$datosarray=array($id->id);
		//$pp=listasql::traerfuncionlistado();
		$pp=procesaparametros::PrepareStatement(listasql::traerfuncionlistado(),$datosarray);
		$query=$this->con->query($pp);
		$row=$query->fetch_array();

		$listas=new objetolistado();
		$listas->id=$row['id'];
		$listas->nombre=$row['nombre'];

		return $listas;
	}

}

?>