<?php  

$controllers = array(
	"index"=>array("view","faq","contact","displayCarDashboard", "error", "home"),
	
	"user"=>array("login","logout", "addNewEmployee", "addEmployee", "editEmployee","deleteEmployee","validate","getAllEmplyees","addCustomer","editCustomer","deleteCustomer","getEmployee","getAllClients", "loginLogout", "addNewCustomer", "getSingleCustomer","employee_passw_change","customer_passw_change","passwordChangedViewEmployee","passwordChangedViewCustomer","addCustomerByCustomer","createAccountCustomerView","validateEmplyee","contactUs","error", "loginScreen"),

	"car"=>array("addCar", "addNewCar", "editCar","getSingleCar" ,"getAllCars","carlisting", "carDisplay","deleteCar","error"),

	"rental"=>array("addRental","returnCar","addReturnRental","getAllRents","getAllIvoices","getAllReturns","reservation","getSingleRental","deleteRental","addReservation","getAllReservations","getSingleReservation","edit_Reservation","cancel_Reservation","findCars","error"),

	"report"=>array("getAllReports","display_All_returns","getAllInvoices","getSingleInvoice","getDashboard","getCarHistory","getClientHistory","error")

);

if(array_key_exists($controller, $controllers)){
	if(in_array($action, $controllers[$controller])){
		dispatch($controller, $action);
	} else
	dispatch("index", "error");
} else
dispatch("index", "error");


function dispatch($controller, $action){

	require_once "controller/".ucfirst($controller)."Controller.class.php";
	require_once "model/DB_Manager.class.php";

	if(!isset($_SESSION)){
		session_start();
	}
	
	switch ($controller) {
		case 'index':
		$controller = new IndexController();
		break;

		case 'user':
		$controller = new UserController();
		break;

		case 'car':
		$controller = new CarController();
		break;

		case 'rental':
		$controller = new RentalController();
		break;

		case 'report':
		$controller = new ReportController();
		break;
		default:
		
		break;
	}
	
	$controller->{$action}();
}
?>