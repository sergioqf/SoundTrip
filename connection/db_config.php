<?php

include_once('class.crud.php');

class db_config{
	private $DB_host = "localhost";
	private $DB_user = "root";
	private $DB_pass = "root";
	private $DB_name = "dbpdo_soundTrip";
	private $crud;

public function db_config(){
	$crud = new crud($DB_con);
	try{
		$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

}
?>