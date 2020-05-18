<?php

class listasql{
	public static function traerfuncionlistado(){
		$query="select * from alumnos where id=?;";
		return $query;
	}
}

?>