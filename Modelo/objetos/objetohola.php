<?php

class objetohola{
	var $id;
	var $titulo;
	var $descripcion;
	var $nombre;
	private $data;
}

class registro{
	var $id;
	var $nombre;

	private $data;

	public function __set($name, $value){
		$this->data[$name]=$value;
	}

	public function __get($name){
		if(array_key_exists($name, $this->data)){
			return $this->data[$name];
			return null;
		}
	}
}

?>