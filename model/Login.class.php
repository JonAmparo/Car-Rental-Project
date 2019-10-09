<?php 

class Login{

	private $ID;
	private $username;
	private $password;
	private $level;
	private $valid;
	public function __construct($array){

		$this->ID = $array['ID'];
		$this->username = $array['username'];
		$this->password = $array['password'];
		$this->level = $array['level'];
		$this->valid = $array['valid'];

	}

	
	// Getters

	public function getID(){
		return $this->ID;
	}

	public function getUserName(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}
	
	public function getLevel(){
		return $this->level;
	}
	
	public function getValid(){
		return $this->valid;
	}
	

	// Setters

	public function setID($id){
		$this->ID = $id;
	}

	public function setUserName($username){
		$this->userName = $username;
	}
	public function setPassword($password){
		$this->password=$password;
	}
	
	public function setLevel($level){
		$this->level=$level;
	}

	public function setValid($valid){
		$this->valid=$valid;
	}
}

?>