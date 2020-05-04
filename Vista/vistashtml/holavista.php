<?php

class holavista {
	function funcionvistafinal($datos){
		$cad='PRIMER HOLA MUNDO UTILIZANDO MVC';
		return $cad;
	}


	function funcionvistaimgfinal($datos){
		$cad="<img src='img/moto.jpg' width=50%; height=50%;>";
		return $cad;
	}


	function funcionvistasql($datos){
		$cad="<h3>MOSTRANDO DESDE LA BASE DE DATOS</h3><br>".$datos->titulo.$cad=$datos->descripcion;
	    return $cad;
	}
}

?>