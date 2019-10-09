<?php 

class Car{

	private $ID;
	private $brand;
	private $model;
	private $type;
	private $tankCapacity;
	private $gasConsumption;
	private $color;
	private $numberofPassenger;
	private $rentPrice;
	private $image;
	private $description;
	private $status;

	public function __construct($array){

		$this->ID = $array['ID'];
		$this->brand = $array['brand'];
		$this->model = $array['model'];
		$this->type = $array['type'];
		$this->tankCapacity = $array['tankCapacity'];
		$this->gasConsumption = $array['gasConsumption'];
		$this->color = $array['color'];
		$this->numberofPassenger = $array['numberofPassenger'];
		$this->rentPrice = $array['rentPrice'];
		$this->image = $array['image'];
		$this->description = $array['description'];
		$this->status = $array['status'];
	}

	// Getters

	public function getCarID(){
		return $this->ID;
	}

	public function getBrand(){
		return $this->brand;
	}


	public function getModel(){
		return $this->model;
	}

	public function getType(){
		return $this->type;
	}

	public function getTankCapacity(){
		return $this->tankCapacity;
	}
	
	public function getGasConsumption(){
		return $this->gasConsumption;
	}

	public function getColor(){
		return $this->color;
	}

	public function getNumberofPassenger(){
		return $this->numberofPassenger;
	}

	public function getRentPrice(){
		return $this->rentPrice;
	}

	public function getImage(){
		return $this->image;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getStatus(){
		return $this->status;
	}

	// Setters

	public function setCarID($id){
		$this->ID = $id;
	}

	public function setBrand($brand){
		$this->brand = $brand;
	}
	public function setModel($model){
		$this->model=$model;
	}
	
	public function setType($type){
		$this->type=$type;
	}

	public function setTankCapacity($tankCapacity){
		$this->tankCapacity=$tankCapacity;
	}

	public function setgasConsumption($gasConsumption){
		$this->gasConsumption=$gasConsumption;
	}

	public function setColor($color){
		$this->color=$color;
	}

	public function setNumberofPassenger($numberofPassenger){
		$this->numberofPassenger=$numberofPassenger;
	}
	
	public function setRentPrice($rentPrice){
		$this->rentPrice=$rentPrice;
	}

	public function setImage($image){
		$this->image=$image;
	}

	public function setDescription($description){
		$this->description=$description;
	}

	public function setStatus($status){
		$this->status=$status;
	}	
}

?>