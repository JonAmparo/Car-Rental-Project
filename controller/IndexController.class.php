<?php 

class IndexController {
	private $db;
	
	function __construct() {
		$this->db = new DB_Manager();
	}

	public function view() {

		// level = 1(admin), level = 2(employee), level = 3(Customer);
		if (isset($_SESSION['logged'])) {
			$logged_user=($_SESSION['logged']);

			$activeEmployee=$this->db->get_Single_Emplyee($logged_user->getUserName());
			$level= $logged_user->getLevel();

			if (($level ==1 || $level ==2) && ($activeEmployee!=null && $activeEmployee->getStatus()==1)){
				$cars=$this->db->display_All_Cars();
				$_SESSION['cars']=$cars;
				$_SESSION['dashboard']=$this->db->getDashboard();

				header("Location: view/employee/index.php");
			} else if ($level ==3) {
				require_once 'view/customers/index.php';
			}
		}

		$is_err=(isset( $_SESSION['error']));
		$error_message ="" ;

		if (isset($_SESSION['error']) ) {
			$error_message=$_SESSION['error'];
		}
		require_once 'view/customers/index.php';
	}

	public function displayCarDashboard(){
		$cars=$this->db->display_All_Cars();
		$_SESSION['cars']=$cars;
		header("Location: view/employee/index.php");
	}

	public function faq(){
		require_once "view/customers/faq.php";
	}

	public function contact(){
		require_once "view/customers/contact.php";
	}

	public function carInformation(){
		require_once "view/customers/carInfo.php";
	}

	public function rental(){
		require_once "view/customers/rent.php";
	}

	public function error(){
		require_once "view/404.php";
	}
}
?>