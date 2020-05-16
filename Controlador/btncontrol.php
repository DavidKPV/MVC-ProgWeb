<?php

require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/vista/registraformulariobo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/beans/botonformulario.php";

$bo=new formularioregistra();

switch ($_REQUEST['action']) {
	case "registra":
		$formulario=new formulario();
		$r=$bo->formularioregistra($formulario);
		print $r;
		break;

	case "registracontactos"
		header("content-type:aplication/json");
		$formulario=new formulario();
		$formulario->nombre=$_POST['nombre'];
		$r=$bo->formularioregistraprofesor($formulario);
		print $r(json_encode($r));
		break;

	default:
		# code...
		break;
}

?>