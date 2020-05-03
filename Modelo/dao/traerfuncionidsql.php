<?php

class listassql{
	public static function traerfuncionidsql(){

		$query="select * from tprueba where nidcatalog=?;";
		return $query;
	}
}

?>