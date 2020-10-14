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

			if (($level == 1 || $level == 2) && ($activeEmployee != null && $activeEmployee->getStatus() == 1)){
				$cars=$this->db->display_All_Cars();
				$_SESSION['cars']=$cars;
				$_SESSION['dashboard']=$this->db->getDashboard();

				require_once 'view/employee/index.php';
				// echo '<script language="javascript">';
				// echo 'alert("employee index")';
				// echo '</script>';
				// header("Location: view/employee/index.php");
			} else if ($level == 3) {
				require_once 'view/customers/index.php';
				// echo '<script language="javascript">';
				// echo 'alert("customers index")';
				// echo '</script>';
			} 
			// else {
			// 	require_once 'view/customers/index.php';
			// 	echo '<script language="javascript">';
			// 	echo 'alert("customers else statement index")';
			// 	echo '</script>';
			// }
		}
		$is_err=(isset( $_SESSION['error']));
		$error_message ="" ;
		// require_once 'view/customers/index.php';

		if (isset($_SESSION['error']) ) {
			$error_message=$_SESSION['error'];
		}
		require_once 'view/customers/index.php';
	}

	public function displayCarDashboard(){
		$cars=$this->db->display_All_Cars();
		$_SESSION['cars']=$cars;
		require_once 'view/employee/index.php';
		// header("Location: view/employee/index.php");
	}

	public function faq(){
		require_once "view/customers/faq.php";
	}

	public function home() {
		$cars=$this->db->display_All_Cars();

		require_once "view/customers/index.php";
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