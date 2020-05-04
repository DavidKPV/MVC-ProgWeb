<?php

require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/holabo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/objetohola.php";

$bo=new moduloholabo();

switch ($_REQUEST['action']) {
	case "controlhola":
		$mensaje=new objetohola();
		$r=$bo->funcionholabo($mensaje);
		print $r;
		break;

	case "miimg":
		$mensaje= new objetohola();
		$r=$bo->funcionimgbo($mensaje);
		print $r; 
		break;
	
	case "listado":
		$modulo= new objetohola();
		$modulo->id=$_POST['id'];
		$r=$bo->fclistado($modulo);
		print $r;
		break;

	case "formulario":
		$mensaje=new registro();
		$r=$bo->retornamns($mensaje);
		print $r;
		break;

	case "registra":
		$registra=new objetohola();
		$registra->nombre=$_POST['nombre'];
		$r=$bo->funcionregistra($registra);
		break;

	default:
		# code...
		break;
}

?>