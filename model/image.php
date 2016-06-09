<?php

class imagem{
	
	private $id;
	private $upload_date;
	
	public function __set($property,$value){
		$this->$property = $value;
	}
	public function __get ($property){
		return $this->$property;
	}
}

?>