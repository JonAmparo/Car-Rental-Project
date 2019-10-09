<?php 

class Rental{

	private $ID;
	private $carID;
	private $customerID;
	private $dateStart;
	private $dateEnd;
	private $price;
	private $tosAccepted;
	private $cancelled;
	private $inspected;
	private $notes;
	private $returnn;


	public function __construct($array){

		$this->ID = $array['ID'];
		$this->carID = $array['carID'];
		$this->customerID = $array['customerID'];
		$this->dateStart = $array['dateStart'];
		$this->dateEnd = $array['dateEnd'];
		$this->price = $array['price'];
		$this->tosAccepted = $array['tosAccepted'];
		$this->cancelled = $array['cancelled'];
		$this->inspected = $array['inspected'];
		$this->notes = $array['notes'];
		$this->returnn = $array['returnn'];

	}

	
	// Getters

	public function getRentalID(){
		return $this->ID;
	}

	public function getCarID(){
		return $this->carID;
	}

	public function getCustomerID(){
		return $this->customerID;
	}

	public function getDateStart(){
		return $this->dateStart;
	}

	public function getDateEnd(){
		return $this->dateEnd;
	}
	
	public function getPrice(){
		return $this->price;
	}

	public function getTosAccepted(){
		return $this->tosAccepted;
	}

	public function getCancelled(){
		return $this->cancelled;
	}

	public function getInspected(){
		return $this->inspected;
	}

	public function getNotes(){
		return $this->notes;
	}

	public function getReturn(){
		return $this->returnn;
	}


	// Setters

	public function setRentalID($id){
		$this->ID = $id;
	}

	public function setCarID($carID){
		$this->carID = $carID;
	}
	public function setCustomerID($customerID){
		$this->customerID=$customerID;
	}
	
	public function setDateStart($dateStartdateStartdateStart){
		$this->dateStart=$dateStartdateStart;
	}

	public function setDateEnd($dateEnd){
		$this->dateEnd=$dateEnd;
	}

	public function setPrice($price){
		$this->price=$price;
	}
	
	public function setTosAccepted($tosAccepted){
		$this->tosAccepted=$tosAccepted;
	}

	public function setCancelled($cancelled){
		$this->cancelled=$cancelled;
	}

	public function setInspected($inspected){
		$this->inspected=$inspected;
	}
	
	public function setNotes($notes){
		$this->notes=$notes;
	}

	public function setReturn($returnn){
		$this->returnn= $returnn;
	}	
}

?>