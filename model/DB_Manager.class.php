<?php  
include "Car.class.php";
include "Login.class.php";
include "Customer.class.php";
include "Employee.class.php";
include "Invoice.class.php";
include "Reservation.class.php";		
include "Rental.class.php";	
include "ReturnRental.class.php";
include "Dashboard.class.php";

	$cleardb_url = parse_url(getenv('CLEARDB_DATABASE_URL'));
	$cleardb_server   = $cleardb_url['us-cdbr-iron-east-05.cleardb.net'];
	$cleardb_username = $cleardb_url['baf1087e074d0c'];
	$cleardb_password = $cleardb_url['5c2e7eb5'];
	$cleardb_db = substr($cleardb_url['heroku_27fdf87e3d73367'],1);

	$active_group = 'default';
	$query_builder = TRUE;

	$db['default'] = array(
		'dsn'    => '',
		'hostname' => $cleardb_server,
		'username' => $cleardb_username,
		'password' => $cleardb_password,
		'database' => $cleardb_db,
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);

class DB_Manager {

	// const HOST = "localhost";
	// const USER = "root";
	// const PASS = "";
	// const DBNAME = "phpcarproject";

	const HOST = "us-cdbr-iron-east-05.cleardb.net";
	const USER = "baf1087e074d0c";
	const PASS = "5c2e7eb5";
	const DBNAME = "heroku_27fdf87e3d73367";

	private $db;

	public function __construct()	{
		try{
			$this->db=new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME,self::USER, self::PASS); 	
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 	

		}catch(Exception $e){
			die("Database connection error<br> " . $e->getMessage());
		}
	}

	/*Employees*/

	public function add_Employee($employee){
		$query=$this->db->prepare("INSERT INTO employees VALUES (DEFAULT, ?,?,?,?,?,? );");
		$query-> execute(array(
			$employee->getUsername(),
			$employee->getPassword(),
			$employee->getFullName(),
			$employee->getEmail(),
			$employee->getLevel(),
			$employee->getStatus()
		));
	}

	public function edit_Employee($employee){
		$query=$this->db->prepare("UPDATE employees SET fullName= ?, email= ?, status = ? WHERE ID = ?");
		$query-> execute(array(
			$employee->getFullName(),
			$employee->getEmail(),
			$employee->getStatus(),
			$employee->getID()
		));
	}

	public function delete_Employee($ID){
		$query=$this->db->prepare("DELETE FROM employees  WHERE ID = ?");
		$query-> execute(array ($ID));
	}

	public function get_Single_Emplyee($username){
		$query = $this->db->prepare("SELECT * FROM employees WHERE username = ?");
		$query-> execute(array ( $username));
		$employee = $query->fetch(PDO:: FETCH_ASSOC);
		$obj=new Employee($employee);
		return $obj;
	}

	public function get_Single_Emplyee_byID($id){
		$query = $this->db->prepare("SELECT * FROM employees WHERE ID = ?");
		$query-> execute(array ( $id));
		$employee = $query->fetch(PDO:: FETCH_ASSOC);
		
		$obj=new Employee($employee);
		return $obj;	
	}

	public function display_All_Employees(){
		$query = $this->db->query("SELECT * FROM employees ");
		$employees = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $employees;
	}

	public function UpdateValidation($username){

		$query = $this->db->prepare("UPDATE login Set valid=1 WHERE username=?");
		$query->execute(array(
			$username
		));
	}


	/* Login */
	public function add_Login($loginUser){
		$query=$this->db->prepare("INSERT INTO login VALUES (DEFAULT, ?,?,?,? );");
		$query-> execute(array(
			$loginUser->getUsername(),
			$loginUser->getPassword(),
			$loginUser->getLevel(),
			$loginUser->getValid()
		));
	}

	public function delete_Login($username){	
		$query=$this->db->prepare("DELETE FROM login  WHERE username=? ");
		$query-> execute(array ( $username));
	}

	public function verify_existence($col, $val, $table){
		$query = $this->db->prepare("SELECT * FROM $table where($col=?);");
		$query->execute(array(
			$val
		));
		$data=$query->fetch(PDO::FETCH_ASSOC);
		if (!empty($data))
			return true;
		else
			return false;
	}

	public function verify_login($array){
		$query = $this->db->prepare("SELECT * FROM login where(username=?  AND password=? AND valid=1);");
		$query->execute(array(
			$array['username'],
			$array['password']
		));

		$data=$query->fetch(PDO::FETCH_ASSOC);

		$obj= new login($data);
		return $obj;
	}


	public function employee_passw_change($user){
		$query=$this->db->prepare("UPDATE login SET password =? WHERE username= ?");
		$query-> execute(array(
			$user->getPassword(),
			$user->getUsername()
		));

		$query1=$this->db->prepare("UPDATE employees SET password =? WHERE username= ?");
		$query1-> execute(array(
			$user->getPassword(),
			$user->getUsername()
		));
	}

	public function customer_passw_change($user){
		$query=$this->db->prepare("UPDATE login SET password =? WHERE username= ?");
		$query-> execute(array(
			$user->getPassword(),
			$user->getUsername()

		));
		$query1=$this->db->prepare("UPDATE customers SET password =? WHERE username= ?");
		$query1-> execute(array(
			$user->getPassword(),
			$user->getUsername()

		));
	}

	/* Car */

	public function add_Car($car){
		$query=$this->db->prepare("INSERT INTO cars VALUES (DEFAULT, ?,?,?,?,?, ?,?,?,?,?,? );");
		$query-> execute(array(
			$car->getBrand(),
			$car->getModel(),
			$car->getType(),
			$car->getTankCapacity(),
			$car->getGasConsumption(),
			$car->getColor(),
			$car->getNumberofPassenger(),
			$car->getRentPrice(),
			$car->getImage(),
			$car->getDescription(),
			$car->getStatus()
		));
	}

	public function edit_Car($car){
		$query=$this->db->prepare("UPDATE cars  SET brand =?, model =?, type=?, tankCapacity =?, gasConsumption =?, color =?, numberofPassenger =?, rentPrice =?, image =?, description =?, status =? WHERE ID= ?");
		$query-> execute(array(
			$car->getBrand(),
			$car->getModel(),
			$car->getType(),
			$car->getTankCapacity(),
			$car->getGasConsumption(),
			$car->getColor(),
			$car->getNumberofPassenger(),
			$car->getRentPrice(),
			$car->getImage(),
			$car->getDescription(),
			$car->getStatus(),
			$car->getCarID()

		));
	}

	public function edit_CarByReturn($id, $status){
		$query=$this->db->prepare("UPDATE cars  SET status =? WHERE ID= ?");
		$query-> execute(array($status,$id));
	}


	public function delete_Car($ID){
		$query=$this->db->prepare("DELETE FROM cars  WHERE ID=? ");
		$query-> execute(array ( $ID));

	}

	public function display_All_Cars(){
		$query = $this->db->query("SELECT * FROM cars ");
		$cars = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $cars;
	}

	public function display_Single_Car($id){
		$query = $this->db->prepare("SELECT * FROM cars WHERE ID= ?");
		$query-> execute(array ($id));
		$car = $query->fetch(PDO:: FETCH_ASSOC);

		$obj=new Car($car);
		return $obj;
	}

	/* Customer */

	public function add_Customer($Customer){
		$query=$this->db->prepare("INSERT INTO customers VALUES (DEFAULT, ?,?,?,?,?, ?,?,?,? );");
		$query-> execute(array(
			$Customer->getUsername(),
			$Customer->getPassword(),
			$Customer->getFullName(),
			$Customer->getDateofBirth(),
			$Customer->getPhone(),
			$Customer->getCustomerEmail(),
			$Customer->getAddress(),
			$Customer->getCustomerDriverLicence(),
			$Customer->getCreditCard()
		));
	}

	public function edit_Customer($Customer){
		$query=$this->db->prepare("UPDATE customers SET username =?, password =?, fullName=?, dateofBirth =?, phone =?, customerEmail =?, address =?, customerDriverLicence =?, creditCard =? WHERE ID= ?");
		$query-> execute(array(
			$Customer->getUsername(),
			$Customer->getPassword(),
			$Customer->getFullName(),
			$Customer->getDateofBirth(),
			$Customer->getPhone(),
			$Customer->getCustomerEmail(),
			$Customer->getAddress(),
			$Customer->getCustomerDriverLicence(),
			$Customer->getCreditCard(),
			$Customer->getCustomerID()

		));
	}

	public function delete_Customer($ID){
		$query=$this->db->prepare("DELETE FROM customers  WHERE ID=? ");
		$query-> execute(array ( $ID));
	}

	public function display_All_Customers(){
		$query = $this->db->query("SELECT * FROM customers ");
		$customers = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $customers;
	}


	public function display_Single_Customer($id){
		$query = $this->db->prepare("SELECT * FROM customers WHERE ID= ?");
		$query-> execute(array ( $id));
		$customer = $query->fetch(PDO:: FETCH_ASSOC);
		
		$obj=new Customer($customer);
		return $obj;	
	}

	public function display_Customer_username($username){
		$query = $this->db->prepare("SELECT * FROM customers WHERE username = ?");
		$query-> execute(array ( $username));
		$customer = $query->fetch(PDO:: FETCH_ASSOC);
		
		$obj=new customer($customer);
		return $obj;
	}


	/* Rental */

	public function add_Rental($Rental){
		$query=$this->db->prepare("INSERT INTO rentals VALUES (DEFAULT, ?,?,?,?,?, ?,?,? ,?,?);");
		$query-> execute(array(
			$Rental->getCarID(),
			$Rental->getCustomerID(),
			$Rental->getDateStart(),
			$Rental->getDateEnd(),
			$Rental->getPrice(),
			$Rental->getTosAccepted(),
			$Rental->getCancelled(),
			$Rental->getInspected(),
			$Rental->getNotes(),
			$Rental->getReturn()
		));
	}

	public function edit_Rental($Rental){
		$query=$this->db->prepare("UPDATE rentals SET carID=?, customerID =?, dateStart=?, dateEnd =?, tosAccepted =?, cancelled =?, inspected =?, notes =?, returnn=? WHERE id = ?");
		$query-> execute(array(
			$Rental->getCarID(),
			$Rental->getCustomerID(),
			$Rental->getDateStart(),
			$Rental->getDateEnd(),
			$Rental->getTosAccepted(),
			$Rental->getCancelled(),
			$Rental->getInspected(),
			$Rental->getNotes(),
			$Rental->getReturn(),
			$Rental->getRentalID()
		));
	}

	public function delete_Rental($ID){
		$query=$this->db->prepare("DELETE FROM rentals  WHERE ID =? ");
		$query-> execute(array ( $ID));
	}

	public function display_All_Rentals(){
		$query = $this->db->query("SELECT * FROM rentals ");
		$rentals = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $rentals;
	}

	public function display_Single_Rental($id){
		$query = $this->db->prepare("SELECT * FROM rentals WHERE id = ?");
		$query-> execute(array ($id));
		$rental = $query->fetch(PDO:: FETCH_ASSOC);

		$obj=new Rental($rental);
		return $obj;			
	}


	/* Return Car */

	public function return_car($ReturnCar, $additionalcharge){

		$query=$this->db->prepare("INSERT INTO returnrentals VALUES (DEFAULT, ?,?,?,?,?, ?,? );");
		$query-> execute(array(
			$ReturnCar->getRentalID(),
			$ReturnCar->getReturnDate(),
			$ReturnCar->getInspected(),
			$ReturnCar->getDamage(),
			$ReturnCar->getnotes(),
			$ReturnCar->getGasLevel(),
			$ReturnCar->getMileage()
		));

		$query = $this->db->prepare("SELECT ID FROM returnrentals WHERE rentalID = ?");

		$query-> execute(array($ReturnCar->getRentalID())); 
		$id = $query->fetch(PDO:: FETCH_ASSOC);
		$Rental = self::display_Single_Rental($ReturnCar->getRentalID());
		// $charge = self::charge_Invoice($Rental,$ReturnCar);

		$InvoiceArray= array ("ID"=>0,"returnID"=>$id['ID'], "charge"=>$Rental->getPrice(), "additionalCharge"=>$additionalcharge);

		$invoice = new Invoice($InvoiceArray);
		$invoicePrint=self::add_Invoice($invoice);
		return $invoicePrint;

	}

	/* Invoices */

	public function charge_Invoice($Rental, $ReturnCar){
		$days =  $ReturnCar->getReturnDate()- $Rental->getDateStart() ;
		var_dump($days);
		$car= self::display_Single_Car($Rental->getCarID());
		$charge = $days * $car->getRentPrice();
		return $charge;	            
	}

	public function add_Invoice($invoice){

		$query=$this->db->prepare("INSERT INTO invoice VALUES (DEFAULT, ?,?,? );");
		$query-> execute(array(
			$invoice->getReturnID(),
			$invoice->getCharge(),
			$invoice->getAdditionalCharge()

		));
		$updatedInvoice=self::getSingleInvoice_ByReturnID($invoice->getReturnID());

		return $updatedInvoice;
	}

	public function display_All_Invoices(){

		$query = $this->db->query("SELECT * FROM invoice ");
		$invoices = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $invoices;
	}

	public function display_All_returns(){

		$query = $this->db->query("SELECT * FROM returnrentals ");
		$allReturns = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $allReturns;
	}
	public function getSingleInvoice($id){
		$query = $this->db->prepare("SELECT * FROM invoice where ID=?");
		$query-> execute(array($id));
		$Invoice_array = $query->fetch(PDO:: FETCH_ASSOC);
		$invoice = new Invoice($Invoice_array);

		return $invoice;
	}

	public function getSingleInvoice_ByReturnID($id){
		$query = $this->db->prepare("SELECT * FROM invoice where returnID=?");
		$query-> execute(array($id));
		$Invoice_array = $query->fetch(PDO:: FETCH_ASSOC);
		$invoice = new Invoice($Invoice_array);

		return $invoice;
	}

	/* Reservation */

	public function addReservation($reservation){

		$query=$this->db->prepare("INSERT INTO reservations VALUES (DEFAULT, ?,?,?,?,?,?,?,?,? );");
		$query-> execute(array(
			$reservation->getCarID(),
			$reservation->getCustomerID(),
			$reservation->getDateStart(),
			$reservation->getDateEnd(),
			$reservation->getPrice(),
			$reservation->getTosAccepted(),
			$reservation->getNotes(),
			$reservation->getRented(),
			$reservation->getCancel()


		));


	}
	public function  getAllReservations (){

		$query = $this->db->query("SELECT * FROM reservations ");
		$reservations = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $reservations;
	}

	public function  getSingleReservation ($id){

		$query = $this->db->prepare("SELECT * FROM reservations where ID=?");
		$query-> execute(array ($id));
		$reservation = $query->fetch(PDO:: FETCH_ASSOC);
		$obj=new Reservation($reservation);
		return $obj;
	}


	public function edit_Reservation($reservation){
		$query=$this->db->prepare("UPDATE reservations SET dateStart=?, dateEnd =?, price=?, notes =? WHERE ID = ?");
		$query-> execute(array(
			$reservation->getDateStart(),
			$reservation->getDateEnd(),          
			$reservation->getPrice(),
			$reservation->getNotes(),
			$reservation->getReservationID()
		));
	}

	public function cancel_Reservation($id){
		$query=$this->db->prepare("UPDATE reservations SET cancel=1 WHERE ID = ?");
		$query-> execute(array(
		$reservation->getReservationID()
		));
	}

	public function rent_Reservation($id){
		$query=$this->db->prepare("UPDATE reservations SET rented=? WHERE ID = ?");
		$query-> execute(array(
			1,            
			$id
		));
	}

	public function delete_Reservation($id){
		$query=$this->db->prepare("DELETE FROM reservations  WHERE ID =? ");
		$query-> execute(array ( $id));
	}

	public function getDashboard(){
		$totalCar=0; 
		$cars=self::display_All_Cars();
		foreach ($cars as $key => $value) {
			$totalCar=$totalCar+1;
		}
		$customers = self::display_All_Customers();
		$totalClients=0;
		foreach ($customers as $key => $customer) {
			$totalClients=$totalClients+1;
		}
		$rentals = self::display_All_Rentals();
		$totalRentedCar=0;
		foreach ($rentals as $key => $rental) {
			$r=new Rental($rental);
			if($r->getReturn()==0){
				$totalRentedCar=$totalRentedCar+1;
			}
		}

		$reservations = self::getAllReservations();
		$totalReservation=0;
		foreach ($reservations as $key => $reservation) {
			$r=new Reservation($reservation);
			if($r->getCancel()==0){
				$totalReservation=$totalReservation+1;
			}
		}

		$dashboardArray= array ("totalCar"=>$totalCar,"totalClient"=>$totalClients, "totalRentedCar"=>$totalRentedCar, "totalReservation"=>$totalReservation);

		$dashboard= new Dashboard($dashboardArray);

		return $dashboard;
	}

	public function getRentingCarHistory($id){
		$query=$this->db->prepare("SELECT * FROM rentals WHERE carID = ?");
		$query-> execute(array($id));
		$rental_array = $query->fetchAll(PDO:: FETCH_ASSOC);
		return $rental_array;
	}

	public function getReservationCustoHistory($id){
		$query=$this->db->prepare("SELECT * FROM reservations WHERE customerID = ? ");
		$query-> execute(array($id));
		$reservation_array = $query->fetchAll(PDO:: FETCH_ASSOC);

		return $reservation_array;
	}

	public function getReservationCarHistory($id){
		$query=$this->db->prepare("SELECT * FROM reservations WHERE carID = ? ");
		$query-> execute(array($id));
		$reservation_array = $query->fetchAll(PDO:: FETCH_ASSOC);

		return $reservation_array;
	}

	public function getClientRentingHistory($id){
		$query=$this->db->prepare("SELECT * FROM rentals WHERE customerID = ?");
		$query-> execute(array($id));
		$rental_array = $query->fetchAll(PDO:: FETCH_ASSOC);

		return $rental_array;
	}

	public function getClientReservationHistory($id){
		$query=$this->db->prepare("SELECT * FROM reservations WHERE customerID = ? ");
		$query-> execute(array($id));
		$reservation_array = $query->fetchAll(PDO:: FETCH_ASSOC);

		return $reservation_array;
	}

	public function findCars($startDate, $endDate){
		$strQry="SELECT c.ID, c.brand, c.model,c.type,c.tankCapacity,c.gasConsumption, c.color, c.numberofPassenger, c.rentPrice,c.image,c.description,c.status, r.dateStart,  r.dateEnd  FROM cars c LEFT JOIN reservations r ON r.carID=c.ID";  
		$query=$this->db->query($strQry);

		$carlist = $query->fetchAll(PDO:: FETCH_ASSOC);

		return $carlist;
	}
}

?>