<?php

require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/mensajebo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/objetomensaje.php";

$bo=new modulohola();

switch ($_REQUEST['action']) {
	case 'mensajeuno':
		$mensaje=new holaobjeto();
		$r=$bo->retornamns($mensaje);
		print $r;
		break;

	case 'registra':
		$registra=new holaobjeto();
		$registra->vnombre=$_POST['nombre'];
		$r=$bo->funcionregistra($registra);
		break;
	
	default:
		# code...
		break;
}

?>