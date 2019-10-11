<?php 

class Customer{

	private $ID;
	private $username;
	private $password;
	private $fullName;
	private $dateofBirth;
	private $phone;
	private $customerEmail;
	private $address;
	private $customerDriverLicence;
	private $creditCard;

	public function __construct($array){

		$this->ID = $array['ID'];
		$this->username = $array['username'];
		$this->password = $array['password'];
		$this->fullName = $array['fullName'];
		$this->dateofBirth = $array['dateofBirth'];
		$this->phone = $array['phone'];
		$this->customerEmail = $array['customerEmail'];
		$this->address = $array['address'];
		$this->customerDriverLicence = $array['customerDriverLicence'];
		$this->creditCard = $array['creditCard'];
	}

	// Getters
	public function getCustomerID(){
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

	public function getDateofBirth(){
		return $this->dateofBirth;
	}
	
	public function getPhone(){
		return $this->phone;
	}

	public function getCustomerEmail(){
		return $this->customerEmail;
	}

	public function getAddress(){
		return $this->address;
	}

	public function getCustomerDriverLicence(){
		return $this->customerDriverLicence;
	}

	public function getCreditCard(){
		return $this->creditCard;
	}

	// Setters

	public function setCustomerID($id){
		$this->ID = $id;
	}

	public function setUserName($username){
		$this->userName = $username;
	}
	public function setPassword($password){
		$this->password=$password;
	}
	
	public function setFullName($fullName){
		$this->fullName=$fullName;
	}

	public function setDateofBirth($dateofBirth){
		$this->dateofBirth=$dateofBirth;
	}

	public function setPhone($phone){
		$this->phone=$phone;
	}

	public function setCustomerEmail($customerEmail){
		$this->customerEmail=$customerEmail;
	}

	public function setAddress($address){
		$this->address=$address;
	}
	
	public function setCustomerDriverLicence($customerDriverLicence){
		$this->customerDriverLicence=$customerDriverLicence;
	}

	public function setCreditCard($creditcard){
		$this->creditcard=$creditcard;
	}
}

?>