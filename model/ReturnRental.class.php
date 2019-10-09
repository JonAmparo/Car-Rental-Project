<?php 

class ReturnRental{

	private $ID;
	private $rentalID;
	private $returnDate;
	private $inspected;
	private $damage;
	private $notes;
	private $gasLevel;
	private $mileage;

	public function __construct($array){

		$this->ID = $array['ID'];
		$this->rentalID = $array['rentalID'];
		$this->returnDate = $array['returnDate'];
		$this->inspected = $array['inspected'];
		$this->damage = $array['damage'];
		$this->notes = $array['notes'];
		$this->gasLevel = $array['gasLevel'];
		$this->mileage = $array['mileage'];
	}

	
	// Getters

	public function getReturnID(){
		return $this->ID;
	}

	public function getRentalID(){
		return $this->rentalID;
	}

	public function getReturnDate(){
		return $this->returnDate;
	}

	public function getInspected(){
		return $this->inspected;
	}

	public function getDamage(){
		return $this->damage;
	}
	
	public function getnotes(){
		return $this->notes;
	}

	public function getGasLevel(){
		return $this->gasLevel;
	}

	public function getMileage(){
		return $this->mileage;
	}


	// Setters

	public function setReturnID($id){
		$this->ID = $id;
	}

	public function setRentalID($rentalID){
		$this->rentalID = $rentalID;
	}
	public function setReturnDate($returnDate){
		$this->returnDate=$returnDate;
	}
	
	public function setInspected($inspected){
		$this->inspected=$inspected;
	}

	public function setDamage($damage){
		$this->damage=$damage;
	}

	public function setNotes($notes){
		$this->notes=$notes;
	}

	public function setGasLevel($gasLevel){
		$this->gasLevel=$gasLevel;
	}

	public function setmileage($mileage){
		$this->mileage=$mileage;
	}
}

?>