<?php

class event{
	
	private $id;
	private $date;
	private $creation_date;
	private $name;
	private $description;
	private $images = array();
	
	public function __set($property,$value){
		$this->$property = $value;
	}
	public function __get ($property){
		return $this->$property;
	}

}

?>