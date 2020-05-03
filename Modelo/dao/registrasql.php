<?php

class registrasql{
	function fregistradatos(){
		$query="insert into nombre(nombre)values(?)";
		return $query;
	}
}


//*****************************
?>