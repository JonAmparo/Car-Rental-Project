<?php 

class RentalController {
	private $db;
	
	function __construct()	{
		$this->db = new DB_Manager();
	}

	public function addRental() {
		date_default_timezone_set("America/New_York");
		if (isset($_SESSION['logged'])) {

			if(isset($_POST['addRental'])){

				if (isset( $_POST['carID'])) {
					$carID=($_POST['carID']);
				} else {
					$_SESSION['error'] =  "car ID can't be empty.";
				}

				if (isset( $_POST['customerID'])) {
					$customerID=($_POST['customerID']);
				} else {
					$_SESSION['error'] =  "Customer ID can't be empty.";
				}

				if (isset($_POST['dateStart'])) {
					$dateStart=$_POST['dateStart'];
				} else {
					$_SESSION['error'] =  "dateStart can't be empty.";
				}

				if (isset($_POST['dateEnd'])) {
					$dateEnd=($_POST['dateEnd']);
				} else {
					$_SESSION['error'] =  "End date  can't be empty.";
				}

				if (isset( $_POST['tosAccepted'])) {
					$tosAccepted=($_POST['tosAccepted']);
				}
				
				if (isset( $_POST['cancelled'])) {
					$cancelled=($_POST['cancelled']);
				}
				
				if (isset( $_POST['inspected'])) {
					$inspected=($_POST['inspected']);
				}

				if (isset( $_POST['notes'])) {
					$notes=($_POST['notes']);
				}

				if(empty($_SESSION['error']))	{
					$rental_array=array(									
						"ID"=>0, 
						"carID"=>$carID, 
						"customerID"=>$customerID,
						"dateStart"=>$dateStart,
						"dateEnd"=>$dateEnd,
						"tosAccepted"=>$tosAccepted,
						"cancelled"=>false,
						"inspected"=>$inspected,
						"notes"=>$notes,
						"returnn"=>0);

					$rental=new Rental($rental_array);

					$this->db->add_Rental($rental);
				}
			}	
		}
		require_once 'view/employee/index.php';
	}

	public function getAllRents(){
		$rentals = $this->db->display_All_Rentals(); 		
		require_once "view/employee/rental_dashboard.php";	
	}

	public function getSingleRental(){	
		if(isset ($_GET['id'])){
			$rental = $this->db->display_Single_Rental($_GET['id']); 		
			require_once 'view/employee/return_edit.php';
		}
	}

	public function deleteRental()	{
		if(isset ($_GET['id'])){
			$this->db->delete_Rental($_GET['id']); 		
			$rentals = $this->db->display_All_Rentals(); 		
			require_once 'view/employee/rental_dashboard.php';
		}
	}

	public function returnCar()	{
		date_default_timezone_set("America/New_York");
		if (isset($_SESSION['logged'])) {

			if(isset($_POST['returnCar'])){

				if (isset( $_POST['RenatlID'])) {
					$RenatlID=$_POST['RenatlID'];
				} else {
					$_SESSION['error'] =  "ID can't be empty.";
				}

				if (isset( $_POST['carID'])) {
					$carID=$_POST['carID'];
				} else {
					$_SESSION['error'] =  "car ID can't be empty.";
				}


				if (isset( $_POST['customerID'])) {
					$customerID=$_POST['customerID'];
				} else {
					$_SESSION['error'] =  "Customer ID can't empty.";
				}

				if (isset( $_POST['dateStart'])) {					
					$dateStart1=strtotime($_POST['dateStart']);
					$dateStart = date( 'Y-m-d H:i:s', $dateStart1 );
				} else {
					$_SESSION['error'] =  "dateStart can't be empty.";
				}

				if (isset($_POST['dateEnd'])) {
					$dateEnd1=strtotime($_POST['dateEnd']);
					$dateEnd = date( 'Y-m-d H:i:s', $dateEnd1 );
				} else {
					$_SESSION['error'] =  "End date can't be empty.";
				}

				$price=0;

				if (isset( $_POST['price']) ) {
					$price=($_POST['price']);
				}

				$tosAccepted=0;

				if (isset( $_POST['tosAccepted']) ) {
					$tosAccepted=($_POST['tosAccepted']);
				}
				
				$cancelled=0;

				if (isset($_POST['cancelled'])) {
					$cancelled=($_POST['cancelled']);
				}

				$inspected=0;

				if (isset($_POST['inspected'])) {
					if($_POST['inspected']=="on"){
						$inspected=1;
					}
				} else {
					$_SESSION['errorr']="inspected can't be empty";
				}

				$notes="";

				if (isset($_POST['notes'])) {
					$notes=($_POST['notes']);
				}

				$damage=0;

				if (isset($_POST['damage'])) {
					if($_POST['damage']=="on"){
						$damage=1;
					}
				}

				if (isset($_POST['gasLevel'])) {
					$gasLevel=($_POST['gasLevel']);
				} else {
					$_SESSION['error'] =  "Gas level can't be empty.";
				}	

				if (isset($_POST['mileage'])) {
					$mileage=$_POST['mileage'];
				} else {
					$_SESSION['error'] =  "Milage can't be empty.";
				}	

				if (isset($_POST['additionalcharge'])) {
					$additionalcharge=($_POST['additionalcharge']);
				}
				
/*				$timeDiff = date_diff(date_create($dateStart),date_create($dateEnd));

				$time=$timeDiff->format("%r%a");

				if($time<=0){
					$_SESSION['error']="Start date must be earlier than end date";
				}

				$todaysDateDiff=date_diff(date_create($dateStart),date_create(strtotime(date('Y-m-d H:i:s'))));

				$time=$timeDiff->format("%r%a");

				if($time<=0){
					$_SESSION['error']="Start date must later than now";
				}*/

				if(empty($_SESSION['error']))	{
					$rental_array=array(									
						"ID"=>$RenatlID, 
						"carID"=>$carID, 
						"customerID"=>$customerID,
						"dateStart"=>$dateStart, 
						"dateEnd"=>$dateEnd,
						"price"=>$price,
						"tosAccepted"=>$tosAccepted,
						"cancelled"=>$cancelled,
						"inspected"=>$inspected,
						"notes"=>$notes,
						"returnn"=>1);

					$rental=new Rental($rental_array);

					$returnRental_array=array(									
						"ID"=>0, 
						"rentalID"=>$RenatlID, 
						"returnDate"=>$dateEnd,
						"inspected"=>$inspected,
						"damage"=>$damage,
						"notes"=>$notes, 
						"gasLevel"=>$gasLevel,
						"mileage"=>$mileage
					);

					$returnRental=new ReturnRental($returnRental_array);

					$this->db->edit_Rental($rental);
					$invoice=$this->db->return_car($returnRental, $additionalcharge);
					$this->db->edit_CarByReturn($carID,1);
					require_once 'view/employee/invoice_final.php';
					
				} else{
					require_once 'view/employee/rental_dashboard.php';
				}
			} 
		} 
	}

	
	public function addReservation(){
		date_default_timezone_set("America/New_York");

		if (isset($_SESSION['logged'])) {

			if(isset($_POST['reservation'])){

				if (isset( $_POST['carID'])) {
					$carID=($_POST['carID']);
				} else {
					$_SESSION['error'] =  "car ID can't be empty.";
				}


				if (isset( $_POST['customerID'])) {
					$customerID=($_POST['customerID']);
				} else {
					$_SESSION['error'] =  "Customer ID can't be empty.";
				}

				if (isset($_POST['dateStart'])) {
					$dateStart1=$_POST['dateStart'];

					$phpdate = strtotime( $dateStart1 );
					$dateStart = date( 'Y-m-d H:i:s', $phpdate );
				} else {
					$_SESSION['error'] =  "dateStart can't be empty.";
				}

				if (isset($_POST['dateEnd'])) {
					$dateEnd1=$_POST['dateEnd'];

					$phpdate = strtotime( $dateEnd1 );
					$dateEnd = date( 'Y-m-d H:i:s', $phpdate );
				} else {
					$_SESSION['error'] =  "End date  can't be empty.";
				}


				if (isset($_POST['price'])) {
					$price=($_POST['price']);
				}

				if (isset( $_POST['notes'])) {
					$notes=($_POST['notes']);
				}

				if (isset( $_POST['accept'])) {
					$accept=($_POST['accept']);
					if($accept=="on"){
						$tosAccepted=1;
					} else{
						$tosAccepted=0;
					}
				} else{
					$_SESSION['error']="Terms and condition must be selected";
				}

				$timeDiff = date_diff(date_create($dateEnd),date_create($dateStart));

				$carprice= $this->db->display_Single_Car($carID);

				$price = $carprice->getRentPrice()*$timeDiff->d;

				$timeDiff = date_diff(date_create($dateStart),date_create($dateEnd));

				$time=$timeDiff->format("%r%a");

				if(empty($_SESSION['error']))	{
					$reservation_array=array(									
						"ID"=>0, 
						"carID"=>$carID, 
						"customerID"=>$customerID,
						"dateStart"=>$dateStart,
						"dateEnd"=>$dateEnd,
						"price"=> $price,
						"tosAccepted"=>$tosAccepted,
						"notes"=>$notes,
						"rented"=>0, // 0 = Not Rented | 1 = Rented
						"cancel"=>0  // 0 = Active Reservation | 1 = Cancelled Reservation
					);

					$reserve=new Reservation($reservation_array);

					$this->db->addReservation($reserve);
					$this->db->edit_CarByReturn($carID,0);
				}
			}
		}
		$cars=$this->db->display_All_Cars();

		require_once "view/customers/index.php";
	}


	public function reservation() {
		if (isset($_SESSION["logged"])){
			$selected_user = $_SESSION["logged"];
			$selected_car = $this->db->display_Single_Car($_GET['carId']);
			$selected_client = $this->db->display_Customer_username($selected_user->getUsername());
		}
		require_once "view/customers/booking.php";
	}

	public function cancel_Reservation(){
		if (isset($_GET['id'])){
			date_default_timezone_set("America/New_York");

			$currentTime=date('Y-m-d h:i:sa');

			$reservationCar = $this->db->getSingleReservation($_GET['id']);

			$timeDiff = date_diff(date_create($currentTime),date_create($reservationCar->getDateStart()));

			if($timeDiff->d <=1){
				$this->db->cancel_Reservation($_GET['id']);
				$this->db->edit_CarByReturn($_GET['carId'],1); // 1 = Available to rent
			} else {
				$_SESSION['error']="Your reservation can't be cancelled after 1 day!";
			}
			$allReservations = $this->db->getAllReservations();
			require_once 'view/employee/reservation_dashboard.php';
		}
	}

	public function getAllReservations(){
		$allReservations = $this->db->getAllReservations();

		require_once 'view/employee/reservation_dashboard.php';
	}

	public function getSingleReservation(){
		if (isset($_GET['id'])){
			$singleReservation=$this->db->getSingleReservation($_GET['id']);	

			require_once 'view/employee/reservation_edit.php';
		}
	}

	public function delete_Reservation(){
		if (isset($_GET['id'])){
			$this->db->delete_Reservation($_GET['id']);
			$allReservations = $this->db->getAllReservations();

			require_once 'view/employee/reservation_dashboard.php';
		}
	}

	public function edit_Reservation(){

		if (isset($_SESSION['logged'])) {

			if(isset($_POST['editResevation'])){

				if (isset( $_POST['ID'])) {
					$ID=($_POST['ID']);
				} else {
					$_SESSION['error'] =  "ID can't be empty.";
				}

				if (isset( $_POST['carID'])) {
					$carID=($_POST['carID']);
				} else {
					$_SESSION['error'] =  "car ID can't be empty.";
				}


				if (isset( $_POST['customerID'])) {
					$customerID=($_POST['customerID']);
				} else {
					$_SESSION['error'] =  "Customer ID can't be empty.";
				}


				if (isset($_POST['dateStart'])) {
					$dateStart1=$_POST['dateStart'];
					$phpdate = strtotime( $dateStart1 );
					$dateStart = date( 'Y-m-d H:i:s', $phpdate );
				} else {
					$_SESSION['error'] =  "dateStart can't be empty.";
				}

				if (isset($_POST['dateEnd'])) {
					$dateEnd1=($_POST['dateEnd']);
					$phpdate = strtotime( $dateEnd1);
					$dateEnd = date( 'Y-m-d H:i:s', $phpdate );
				} else {
					$_SESSION['error'] =  "End date  can't be empty.";
				}


				if (isset($_POST['price'])) {
					$price=($_POST['price']);
				} else {
					$_SESSION['error'] =  "Price  can't be empty.";
				}

				$tosAccepted=0;

				if (isset($_POST['tosAccepted'])) {
					$tosAccepted=($_POST['tosAccepted']);
				}

				$inspected=0;

				if (isset($_POST['inspected'])) {
					if($_POST['inspected']=="on"){
						$inspected=1;
					}
				}

				if (isset( $_POST['notes'])) {
					$notes=($_POST['notes']);
				}

				$timeDiff = date_diff(date_create($dateStart),date_create($dateEnd));

/*				$time=$timeDiff->format("%r%a");

				if($time<=0){
					$_SESSION['error']="Start date must be earlier than end date";
				}*/

/*				$timeDiff = date_diff(date_create($dateStart), date_create(strtotime(date('Y-m-d H:i:s'))));*/

/*				$time=$timeDiff->format("%r%a");

				if($time<=0){
					$_SESSION['error']="Start date must be later than now";
				}*/

				if(empty($_SESSION['error']))	{
					$rental_array=array(									
						"ID"=>0, 
						"carID"=>$carID, 
						"customerID"=>$customerID,
						"dateStart"=>$dateStart,
						"dateEnd"=>$dateEnd,
						"price"=>$price,
						"tosAccepted"=>$tosAccepted,
						"cancelled"=>0,
						"inspected"=>$inspected,
						"notes"=>$notes,
						"returnn"=>0 //  0 = not available | 1 = available
					);

					$rental=new Rental($rental_array);

					$this->db->add_Rental($rental);
					$this->db->rent_Reservation($ID);
				}
			}
		}
		$allReservations = $this->db->getAllReservations();

		require_once 'view/employee/reservation_dashboard.php';
	}

	public function findCars() {

		if(isset($_POST['formSearchSubmit'])){

			if(isset($_POST['formSearchUpDate'])){
				$startDate=$_POST['formSearchUpDate'];
				$phpdate1 = strtotime( $startDate );
				$dateStart1 = date( 'Y-m-d H:i:s', $phpdate1 );

			} else{
				$_SESSION['error']="Please enter start date";
			}

			if(isset($_POST['formSearchOffDate'])){
				$endDate=$_POST['formSearchOffDate'];
				$phpdate2 = strtotime( $endDate );
				$dateEnd1 = date('Y-m-d H:i:s', $phpdate2 );
			} else{
				$_SESSION['error']="Please enter end date";
			}

			$timeDiff = date_diff(date_create($dateStart1),date_create($dateEnd1));

			$time=$timeDiff->format("%r%a");

			if($time<=0){
				$_SESSION['error']="Start date must be earlier than end date";
			}

			$todaysDate=date("Y-m-d H:i:s");

			$todaysDateDiff=date_diff(date_create(strtotime(date('Y-m-d H:i:s'))), date_create($dateStart1));

			$time=$todaysDateDiff->format("%r%a");          

			if(empty($_SESSION['error'])){	

				$filteredCars=$this->db->findCars($dateStart1,$dateEnd1);

				$cars=array();

				foreach ($filteredCars as $key => $c) {
					if($c['dateStart']==null && empty($c['dateStart']) && $c['dateEnd']==null && empty($c['dateEnd'])){
						$car_array=array(
							"ID"=>$c['ID'], 
							"brand"=>$c['brand'], 
							"model"=>$c['model'],
							"type"=>$c['type'], 
							"tankCapacity"=>$c['tankCapacity'],
							"gasConsumption"=>$c['gasConsumption'],
							"color"=>$c['color'],
							"numberofPassenger"=>$c['numberofPassenger'],
							"rentPrice"=>$c['rentPrice'],
							"image"=>$c['image'],
							"description"=>$c['description'],
							"status"=>$c['status']);

						$cars[]=$car_array;
					} else if(($c['dateStart']>$dateEnd1) || ($c['dateEnd']<$dateStart1)){
						$car_array=array(
							"ID"=>$c['ID'], 
							"brand"=>$c['brand'], 
							"model"=>$c['model'],
							"type"=>$c['type'], 
							"tankCapacity"=>$c['tankCapacity'],
							"gasConsumption"=>$c['gasConsumption'],
							"color"=>$c['color'],
							"numberofPassenger"=>$c['numberofPassenger'],
							"rentPrice"=>$c['rentPrice'],
							"image"=>$c['image'],
							"description"=>$c['description'],
							"status"=>$c['status']);

						$cars[]=$car_array;
					}
				}
				require_once "view/customers/car-listing.php";
			}else{
				require_once "view/customers/index.php";
			}
		}
	}

	public function verifyDate($date){
		$strict = true;
		$format = 'Y-m-d H:i:s';
		$d = DateTime::createFromFormat($format, $date);

		return $d && $d->format($format) == $date;
	}

	public function error(){
		require_once "view/404.php";
	}
}
?>