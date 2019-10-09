<?php 

class Invoice{

	private $ID;
	private $returnID;
	private $charge;
	private $additionalCharge;

	public function __construct($array){
		$this->ID = $array['ID'];
		$this->returnID = $array['returnID'];
		$this->charge = $array['charge'];
		$this->additionalCharge = $array['additionalCharge'];
	}

	
	// Getters

	public function getID(){
		return $this->ID;
	}

	public function getReturnID(){
		return $this->returnID;
	}


	public function getCharge(){
		return $this->charge;
	}

	public function getAdditionalCharge(){
		return $this->additionalCharge;
	}

	// Setters

	public function setID($id){
		$this->ID = $id;
	}

	public function setReturnID($returnID){
		$this->returnID = $returnID;
	}
	public function setCharge($charge){
		$this->charge=$charge;
	}
	
	public function setAdditionalCharge($additionalCharge){
		$this->additionalCharge=$additionalCharge;
	}
}

?>