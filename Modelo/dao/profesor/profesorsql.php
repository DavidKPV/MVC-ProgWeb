<?php
class profesorSql{
	function registraprofesor(){
		$query="INSERT INTO alumnos(nombre) VALUES (?);";
		return $query;
	}
}
?>