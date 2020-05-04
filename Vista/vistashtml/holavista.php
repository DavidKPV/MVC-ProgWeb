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

	function funcionvistaformulario($datos){
		$cad='
		<form name="formu" id="formu" method="POST">
		Nombre: <input type="text" name="nombre">
		<br><br>
		<input type="submit" value="Enviar" onclick="registra()">
		</form>';

		return $cad;
	}
}

?>