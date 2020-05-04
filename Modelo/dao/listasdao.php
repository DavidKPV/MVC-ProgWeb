<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/objetohola.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/dao/traerfuncionidsql.php";
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

	function conectadaofin($datos){
		$datosarray=array($datos->id);
		$pp=procesaparametros::PrepareStatement(listassql::traerfuncionidsql(),$datosarray);
		$query=$this->con->query($pp);
		$query->data_seek(0);
		$row=$query->fetch_array();
		$listas=new objetohola();
		$listas->titulo=$row['Vtitulo'];
		$listas->descripcion=$row['Vdescripcion'];

		return $listas;
	}

}

?>