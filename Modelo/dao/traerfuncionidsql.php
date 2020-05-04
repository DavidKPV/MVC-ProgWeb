<?php

class listassql{
	public static function traerfuncionidsql(){

		$query="select * from tprueba where Nidcatalog=?;";
		return $query;
	}
}

?>