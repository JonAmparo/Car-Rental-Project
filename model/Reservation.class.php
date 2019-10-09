<?php 

class Reservation{

	private $ID;
	private $carID;
	private $customerID;
	private $dateStart;
	private $dateEnd;
	private $price;
	private $tosAccepted;
	private $notes;
	private $rented;
	private $cancel;


	public function __construct($array){

		$this->ID = $array['ID'];
		$this->carID = $array['carID'];
		$this->customerID = $array['customerID'];
		$this->dateStart = $array['dateStart'];
		$this->dateEnd = $array['dateEnd'];
		$this->price = $array['price'];
		$this->tosAccepted = $array['tosAccepted'];
		$this->notes = $array['notes'];
		$this->rented = $array['rented'];
		$this->cancel = $array['cancel'];

	}

	
	// Getters

	public function getReservationID(){
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

	public function getNotes(){
		return $this->notes;
	}

	public function getRented(){
		return $this->rented;
	}

	public function getCancel(){
		return $this->cancel;
	}

	// Setters

	public function setReservationID($id){
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

	public function setNotes($notes){
		$this->notes=$notes;
	}

	public function setRented($rented){
		$this->rented=$rented;
	}

	public function setCancel($cancel){
		return $this->cancel=$cancel;
	}
}

?>