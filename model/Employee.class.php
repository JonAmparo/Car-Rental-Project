<?php 

class Employee{

	private $ID;
	private $username;
	private $password;
	private $fullName;
	private $email;
	private $level;
	private $status;

	public function __construct($array){

		$this->ID = $array['ID'];
		$this->username = $array['username'];
		$this->password = $array['password'];
		$this->fullName = $array['fullName'];
		$this->email = $array['email'];
		$this->level = $array['level'];
		$this->status = $array['status'];
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

	public function getFullName(){
		return $this->fullName;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getLevel(){
		return $this->level;
	}
	
	public function getStatus(){
		return $this->status;
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
	
	public function setFullName($fullname){
		$this->fullName=$fullname;
	}

	public function setEmail($email){
		$this->email=$email;
	}

	public function setLevel($level){
		$this->level=$level;
	}

	public function setStatus($status){
		$this->status=$status;
	}
}

?>