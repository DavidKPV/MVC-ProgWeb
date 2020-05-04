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

	default:
		# code...
		break;
}

?>