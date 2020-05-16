<?php

class profesorsql{
	function registraprofesor(){
		$query="INSERT INTO alumnos(nombre) VALUES (?);";
		return $query;
	}
}

?>