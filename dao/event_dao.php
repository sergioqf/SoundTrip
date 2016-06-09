<?php
include('model/event.php');

class event_dao{
	private $db_connection;
	private $event;
	
	function __construct($db_connection, $event){
		$this->db_connection = $db_connection;
		$this->event = $event;
	}
	
	public function insert($event){
		try{
			$stmt = $this->db_connection->prepare("INSERT INTO events(name,last_name,email_id,contact_no) VALUES(:fname, :lname, :email, :contact)");
			$stmt->bindparam(":fname",$fname);
			$stmt->bindparam(":lname",$lname);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":contact",$contact);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}

	public function select($event){
		$stmt = $this->db_connection->prepare("SELECT * FROM tbl_users WHERE id=:id");
		$stmt->execute(array(":id"=>$event->id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	
	public function update($event){
		try
		{
			$stmt=$this->db->prepare("UPDATE tbl_users SET first_name=:fname,
		                                               last_name=:lname,
													   email_id=:email,
													   contact_no=:contact
													WHERE id=:id ");
			$stmt->bindparam(":fname",$fname);
			$stmt->bindparam(":lname",$lname);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":contact",$contact);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
		
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
	
	public function remore($event){
		$stmt = $this->db->prepare("DELETE FROM tbl_users WHERE id=:id");
		$stmt->bindparam(":id",$event->id);
		$stmt->execute();
		return true;
	}
	
}