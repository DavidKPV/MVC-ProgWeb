<?php

class vistaformulariobutton {
	private $logicavista;

	function __construct(){

	}

	//Esta función muestra el formulario
	function vistaregistra($datos){
		$cad='';
		$cad.='<form name="formcontacto" id="formcontacto">Nombre: <input type="text" name="nombre" id="nombre"><br>';
		$cad.='<input type="submit" value="Aceptar" onclick="registraformulario();">';
		$cad.='</form>';

		return $cad;
	}

	//Esta función muestra el listado
	function vistadatos($datos){
		$cad="<h3>MOSTRANDO DESDE LA BASE DE DATOS</h3><br>".$datos->id."   |   ".$cad=$datos->nombre;
		

	    return $cad;
	}
}

?>