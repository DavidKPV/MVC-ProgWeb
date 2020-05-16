<?php

class vistaformulariobutton {
	private $logicavista;

	function __construct(){

	}

	function vistaregistra($datos){
		$cad='';
		$cad.='<form name="formcontacto" id="formcontacto">Nombre: <input type="text" name="nombre" id="nombre"><br>';
		$cad.='<input type="submit" value="Aceptar" onlcick="registraformulario();">';
		$cad.='</form>';

		return $cad;
	}
}

?>