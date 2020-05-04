<?php

class registrasql{
	public static function fregistradatos(){
		$query="insert into nombres(nombre)values(?);";
		return $query;
	}
}

?>