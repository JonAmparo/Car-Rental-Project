<?php 

class Dashboard{

	private $totalCar;
	private $totalClient;
	private $totalRentedCar;
	private $totalReservation;

	public function __construct($array){

		$this->totalCar = $array['totalCar'];
		$this->totalClient = $array['totalClient'];
		$this->totalRentedCar = $array['totalRentedCar'];
		$this->totalReservation=$array['totalReservation'];
	}

	// Getters

	public function getTotalCar(){
		return $this->totalCar;
	}

	public function getTotalClient(){
		return $this->totalClient;
	}

	public function getTotalRentedCar(){
		return $this->totalRentedCar;
	}

	public function getTotalReservation(){
		return $this->totalReservation;
	}
	

	// Setters

	public function setTotalCar($input){
		$this->totalCar=$input;
	}

	public function setTotalClient(){
		$this->totalClient=$input;
	}

	public function setTotalRentedCar(){
		$this->totalRentedCar=$input;
	}

	public function setTotalReservation(){
		$this->totalReservation=$input;
	}
}

?>