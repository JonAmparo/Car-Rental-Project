<?php 

class ReportController {
	private $db;
	
	function __construct()	{
		$this->db = new DB_Manager();
	}

	public function getDashboard(){	
		$dashboard=$this->db->getDashboard();
		return $dashboard;	
	}

	public function getAllInvoices(){
		$allInvoices = $this->db->display_All_Invoices(); 		
		require_once 'view/employee/invoice_dashboard.php';
	}
	
	public function getSingleInvoice(){			 
		if(isset ($_GET['id'])){		
			$invoice = $this->db->getSingleInvoice($_GET['id']); 		
			require_once 'view/employee/invoice_final.php';
		}				
	}

	public function display_All_returns(){
		$allReturns = $this->db->display_All_returns(); 		
		require_once 'view/employee/return_dashboard.php';
	}

	public function getCarHistory() {
		if(isset($_SESSION['logged'])) {
			if (isset($_GET['id'])){
				$rentals=$this->db->getRentingCarHistory($_GET['id']);
				$allReservations=$this->db->getReservationCarHistory($_GET['id']);
			}
			require_once 'view/employee/car_history.php';
		}
	}

	public function getClientHistory() {
		if(isset($_SESSION['logged'])) {
			if (isset($_GET['id'])){
				$clientRentals=$this->db->getClientRentingHistory($_GET['id']);
				$clientReservation=$this->db->getReservationCustoHistory($_GET['id']);
			}
			require_once 'view/employee/customer_history.php';
		}
	}

	public function getAllReports(){
		if(isset($_SESSION['logged'])){
			$totalCar=0; 
			$cars=$this->db->display_All_Cars();

			foreach ($cars as $key => $value) {
				$totalCar=$totalCar+1;
			}

			$totalClients=0;

			$customers = $this->db->display_All_Customers();

			foreach ($customers as $key => $customer) {
				$totalClients=$totalClients+1;
			}

			$carstobeRetuns=array();

			$rentals = $this->db->display_All_Rentals();

			$totalCarReturned=0;

			foreach ($rentals as $key => $rental) {
				$r=new Rental($rental);
				if($r->getReturn()==0){

					$car=$this->db->display_Single_Car($r->getCarID());

					$customer=$this->db->display_Single_Customer($r->getCustomerID());

					$returns = array("ID"=>$r->getRentalID(),
						"customerID"=>$r->getCustomerID(),
						"carID"=>$r->getCarID(),
						'customer' => $customer->getFullName(),
						'carBrand'=>$car->getBrand(),
						'model' =>$car->getModel(),
						'dateStart'=>$r->getDateStart(),
						'dateEnd'=>$r->getDateStart(),
						'price'=>$r->getPrice()
					);
					$carstobeRetuns[]=$returns;
				}
			}
			require_once 'view/employee/report_dashboard.php';
		}
	}
}
?>