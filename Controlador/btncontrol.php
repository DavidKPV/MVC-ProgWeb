<?php

require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/vista/registraformulariobo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/beans/botonformulario.php";

$bo=new formularioregistra();
$bolistado=new modulodelistado();

switch ($_REQUEST['action']) {
	//Caso que muestra el formulario
	case "registra":
		$formulario=new formulario();
		$r=$bo->formularioregistra($formulario);
		print $r;
		break;

	//Caso que registra el dato
	case "registracontactos":
		header("content-type:aplication/json");
		$formulario=new formulario();
		$formulario->nombre=$_POST['nombre'];
		$r=$bo->formularioregistraprofesor($formulario);
		print $r(json_encode($r));
		break;

	//Caso que muestra los datos de la base de datos
	case "listado":
		//$modulo= new objetodelistado();
		//$modulo->id=$_POST['id'];
		$r=$bolistado->listado();
		print $r;
		break;

	default:
		# code...
		break;
}

?>