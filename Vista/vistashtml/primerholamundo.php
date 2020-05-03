<?php

class primervistauno{
	function vistafinal($datos){
		$cad='
		<form name="formu" id="formu">
		Nombre: <input type="text" name="nombre">
		<br>
		<input type="submit" value="Enviar" onclick="registra()">
		</form>';

		return $cad;
	}
}

?>