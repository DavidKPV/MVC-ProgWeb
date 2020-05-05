<?php

class objetohola{
	var $id;
	var $titulo;
	var $descripcion;
	private $data;
}

class registro{
	var $id=0;
	var $nombre;

	private $data;

	public function __set($nombre, $value){
		$this->data[$nombre]=$value;
	}

	public function __get($nombre){
		if(array_key_exists($nombre, $this->data)){
			return $this->data[$nombre];
			return null;
		}
	}
}

class registrob{
	var $nombre;

	private $data;
}

?>