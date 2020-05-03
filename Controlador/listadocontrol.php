<?php

require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/bo/listadobo.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta."/modelo/objetos/objetolistadoobjeto.php";

$bo=new listadobo();
//$bo=new objetolistado();

switch ($_POST['action']) {
	case 'listado':
		$modulo=new objetolistado();
		$modulo->id=$_POST['id'];
		$r=$bo->fclistado($modulo);
		print $r;
		break;
	
	default:
		# code...
		break;
}


?>