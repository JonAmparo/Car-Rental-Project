<?php 

class CarController {
	private $db;
	
	function __construct()	{
		$this->db = new DB_Manager();
	}


	public function addCar() {

		if(isset($_POST['addCar'])){

			if (isset( $_POST['brand'])) {
				$brand=($_POST['brand']);
			} else {
				$_SESSION['error'] =  "Brand can't be empty.";
			}

			if (isset( $_POST['model'])) {
				$model=($_POST['model']);
			} else {
				$_SESSION['error'] =  "Model can't be empty.";
			}

			if (isset( $_POST['type'])) {
				$type=($_POST['type']);
			} else {
				$_SESSION['error'] =  "type name can't be empty.";
			}

			if (isset( $_POST['tankCapacity'])) {
				$tankCapacity=($_POST['tankCapacity']);
			} else {
				$_SESSION['error'] =  "tankCapacity name can't be empty.";
			}

			if (isset( $_POST['gasConsumption']) && $_POST['gasConsumption']>0) {
				$gasConsumption=($_POST['gasConsumption']);
			} else {
				$_SESSION['error'] =  "Gas consumption can't be empty.";
			}

			if (isset( $_POST['color'])) {
				$color=($_POST['color']);
			} else {
				$_SESSION['error'] =  "Color can't be empty.";
			}


			if (isset( $_POST['numberofPassenger']) && $_POST['numberofPassenger']>0) {
				$numberofPassenger=($_POST['numberofPassenger']);
			} else {
				$_SESSION['error'] =  "Number of passenger can't be empty.";
			}

			if (isset( $_POST['rentPrice']) && $_POST['rentPrice']>0) {
				$rentPrice=($_POST['rentPrice']);
			} else {
				$_SESSION['error'] =  "Rent price can't be empty.";
			}

			$destination="";

			if(isset($_FILES['image'])){
				$path = "image/";
				$file_type = $_FILES['image']['type'];
				$name = $_FILES['image']['name'];

				$extArray = explode(".", $name);
				$ext = $extArray[COUNT($extArray) - 1];
				$error = array();
				$allowed_extensions = ["jpg", "jpeg", "png", "gif", "svg"];

				if(!in_array($ext, $allowed_extensions)){
					$_SESSION['error'] = "Only image can be uploaded!";
				}
							//check for server error
				if($_FILES['image']['error'] == 0){
					$destination = $path . $extArray[0] ."_" . time() . "." . $ext;
				}					        
			}

			if(!empty($destination) && strlen($destination)>0)
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);

			$description="";

			if (isset( $_POST['description'])) {
				$description=($_POST['description']);

			}

			if (isset( $_POST['status']) && $_POST['status']>0) {
				$status=($_POST['status']);

			}
			else {
				$_SESSION['error'] =  "Rent price can't be empty.";
			}

			if(empty($_SESSION['error']))	{
				$car_array=array(									
					"ID"=>0, 
					"brand"=>$brand, 
					"model"=>$model,
					"type"=>$type, 
					"tankCapacity"=>$tankCapacity,
					"gasConsumption"=>$gasConsumption,
					"color"=>$color,
					"numberofPassenger"=>$numberofPassenger,
					"rentPrice"=>$rentPrice,
					"image"=>$destination,
					"description"=>$description,
					"status"=>$status
				);

				$car=new Car($car_array);


				$this->db->add_Car($car);
			}

		}

		$cars=$this->db->display_All_Cars();

		require_once "view/employee/car_dashboard.php";
	}

	public function getSingleCar(){
		if(isset ($_GET['id'])){
			$carForEdit = $this->db->display_Single_Car($_GET['id']);

			require_once("view/employee/car_edit.php");
		}
	}

	public function getAllCars() {
		$cars=$this->db->display_All_Cars();
		$dashboard=$this->db->getDashboard();
		require_once "view/employee/car_dashboard.php";
	}

	public function carDisplay(){
		if(isset ($_GET['id'])){
			$carForDisplay = $this->db->display_Single_Car($_GET['id']);

			require_once("view/customers/car-detai.php");
		}
	}

	public function carlisting() {
		$cars=$this->db->display_All_Cars();

		require_once "view/customers/cars.php";
	}

	
	public function error(){
		require_once "view/404.php";
	}

	public function deleteCar(){

		if(isset ($_GET['id'])){
			$this->db->delete_Car($_GET['id']);
			$cars = $this->db->display_All_Cars();

			require_once 'view/employee/car_dashboard.php';
		}
	}


	public function editCar() 	{
		if(isset($_POST['editCar'])){

			if (isset( $_POST['ID'])) {
				$ID=($_POST['ID']);
			} else {
				$_SESSION['error'] =  "ID can't be empty.";
			}

			if (isset( $_POST['brand'])) {
				$brand=($_POST['brand']);
			} else {
				$_SESSION['error'] =  "Brand can't be empty.";
			}

			if (isset( $_POST['model'])) {
				$model=($_POST['model']);
			} else {
				$_SESSION['error'] =  "Model can't be empty.";
			}

			if (isset( $_POST['type'])) {
				$type=($_POST['type']);
			} else {
				$_SESSION['error'] =  "type name can't be empty.";
			}

			if (isset( $_POST['tankCapacity'])) {
				$tankCapacity=($_POST['tankCapacity']);
			} else {
				$_SESSION['error'] =  "tankCapacity name can't be empty.";
			}

			if (isset( $_POST['gasConsumption']) && $_POST['gasConsumption']>0) {
				$gasConsumption=($_POST['gasConsumption']);
			} else {
				$_SESSION['error'] =  "Gas consumption can't be empty.";
			}

			if (isset( $_POST['color'])) {
				$color=($_POST['color']);
			} else {
				$_SESSION['error'] =  "Color can't be empty.";
			}


			if (isset( $_POST['numberofPassenger']) && $_POST['numberofPassenger']>0) {
				$numberofPassenger=($_POST['numberofPassenger']);
			} else {
				$_SESSION['error'] =  "Number of passenger can't be empty.";
			}

			if (isset( $_POST['rentPrice']) && $_POST['rentPrice']>0) {
				$rentPrice=($_POST['rentPrice']);
			} else {
				$_SESSION['error'] =  "Rent price can't be empty.";
			}

			$destination="";


			if(isset($_FILES['image'])){
				$path = "image/";
				$file_type = $_FILES['image']['type'];
				$name = $_FILES['image']['name'];

				$extArray = explode(".", $name);
				$ext = $extArray[COUNT($extArray) - 1];
				$error = array();
				$allowed_extensions = ["jpg", "jpeg", "png", "gif", "svg"];

				if(!in_array($ext, $allowed_extensions)){
					$_SESSION['error'] = "Only image can be uploaded!";
				}

				if($_FILES['image']['error'] == 0){
					$destination = $path . $extArray[0] ."_" . time() . "." . $ext;						    
				}
			}

			if(!empty($destination) && strlen($destination)>0)
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);

			$description="";

			if (isset( $_POST['description'])) {
				$description=($_POST['description']);

			}

			if (isset( $_POST['status']) && $_POST['status']>=0) {
				$status=($_POST['status']);
			} else {
				$_SESSION['error'] =  "Rent price can't be empty.";
			}

			if (empty($_SESSION['error']))	{
				$car_array=array(									
					"ID"=>$ID, 
					"brand"=>$brand, 
					"model"=>$model,
					"type"=>$type, 
					"tankCapacity"=>$tankCapacity,
					"gasConsumption"=>$gasConsumption,
					"color"=>$color,
					"numberofPassenger"=>$numberofPassenger,
					"rentPrice"=>$rentPrice,
					"image"=>$destination,
					"description"=>$description,
					"status"=>$status
				);

				$car=new Car($car_array);

				$this->db->edit_Car($car);
			}

		}

		$cars=$this->db->display_All_Cars();

		require_once "view/employee/car_dashboard.php";
	}
}
?>