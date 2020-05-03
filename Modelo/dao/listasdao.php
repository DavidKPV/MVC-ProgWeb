<?php

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/objetolistadoobjeto.php";
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
		$datosarray=array($datos->vtitulo);
		$pp=procesaparametros::PrepareStatement(listassql::traerfuncionidsql(),$datosarray);
		$query=$this->con->query($pp);
		$query->data_seek(0);
		$row=$query->fetch_array();

		while ($row=mysqli_fetch_array($query)){
			print $listas->titulo=$row['vtitulo'];
		}
	}

}

?>