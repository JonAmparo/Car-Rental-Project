<?php 

class UserController { 
	private $db;

	function __construct() {
		$this->db = new DB_Manager();
	}

	public function login(){

		if(isset($_POST['login'])){

			if (isset( $_POST['username'])) {
				$username=$_POST['username'];
			} else {
				$_SESSION['error'] =  "Username can't be empty.";
			}
			if (isset( $_POST['password'])) {
				$password=($_POST['password']);
			} else {
				$_SESSION['error'] =  "Password can't be empty.";
			}


			if(empty($_SESSION['error'])){
				$user_exist= $this->db->verify_existence("username", $username, "login");

				if ($user_exist==true){
					$singleuser = $this->db->verify_login(array("username"=>$username, "password"=>md5($password)));

					if($singleuser!=null && !empty($singleuser)&& $singleuser->getUsername()!=null)
						$_SESSION["logged"]=($singleuser);
					else
						$_SESSION['error']= "Username/password is wrong. or, not you didn't verify yet!";

					echo "username/password incorrect";

					header("Location: ../index.php");
				} else {
					$_SESSION['error']= "Username/password is wrong. or, not you didn't verify yet!";

					header("Location: ../index.php");
				}
			} else
			header("Location: ../index.php");
		}
	}

	public function addNewEmployee() {
		require_once "view/employee/employee_add.php";
	}

	public function addEmployee(){
		if(isset($_POST['addEmployee'])){
			if (isset( $_POST['firstname']) && strlen($_POST['firstname'])>1 ) {
				$firstname=($_POST['firstname']);

			} else {
				$_SESSION['error'] =  "First name can't empty.";
			}

			if (isset( $_POST['lastname'])) {
				$lastname=($_POST['lastname']);

			} else {
				$_SESSION['error'] =  "Last name can't empty.";
			}

			if (isset( $_POST['username'])) {
				$username=$_POST['username'];
			} else {
				$_SESSION['error'] =  "Username can't be empty.";
			}

			if (isset( $_POST['password'])) {
				$password=md5($_POST['password']);
			} else {
				$_SESSION['error'] =  "Password can't be empty.";
			}

			if (isset( $_POST['confirmpassword'])) {
				$confirm_password=md5($_POST['confirmpassword']);
			} else {
				$_SESSION['error'] =  "Confirm password can't be empty.";
			}

			if (isset( $_POST['email'])) {
				$email=($_POST['email']);

			} else {
				$_SESSION['error'] =  "Valid email is missing.";
			}

			if($password!=$confirm_password){
				$_SESSION['error'] =  "Password and confirm password does not match.";
			}


			if(empty($_SESSION['error']))	{

				$user_exist= $this->db->verify_existence("username",$username, "login");
				if(empty($user_exist)){

					$user_array=array("ID"=>0,									
						"username"=>$username, 
						"password"=>md5($password), 
						"fullName"=>$firstname." ".$lastname ,
						"email"=>$email, 
						"level"=>2,
						"status"=>1);
					$user = new Employee($user_array);

					$login_array=array(
						"ID"=>0,
						"username"=>$username,
						"password"=>($password),
						"level"=>2,
						"valid"=>1  // 0 = not valid | 1 = Valid
					);				// Try to verify using sendmail.php
					$loginUser=new Login($login_array);

					$this->db->add_Employee($user);
					$this->db->add_Login($loginUser);

					$employees= $this->db->display_All_Employees();

					require_once 'view/employee/employee_dashboard.php';
				} else {	
					$_SESSION['error'] =  "Please try a new Email adress .";
					$employees= $this->db->display_All_Employees();

					require_once 'view/employee/employee_dashboard.php';	 					
				}
			} else {
				$_SESSION['error'] =  "Please try a new username.";
				$employees= $this->db->display_All_Employees();

				require_once 'view/employee/employee_dashboard.php';
			}
		} else{

			$employees= $this->db->display_All_Employees();

			require_once 'view/employee/employee_dashboard.php';
		}
	}



	public function editEmployee(){
		if(isset($_POST['editEmployee'])){

			if (isset( $_POST['employeeID'])) {
				$ID=($_POST['employeeID']);

			}
			if (isset( $_POST['firstname'])) {
				$firstname=($_POST['firstname']);
			} else {
				$_SESSION['error'] =  "First name can't empty.";
			}

			if (isset( $_POST['lastname'])) {
				$lastname=($_POST['lastname']);
			} else {
				$_SESSION['error'] =  "Last name can't empty.";
			}

			if (isset( $_POST['username'])) {
				$username=$_POST['username'];
			} 			

			if (isset( $_POST['status'])) {
				$status=($_POST['status']);
			} else {
				$_SESSION['error'] =  "Status can't be empty.";
			}

			$password="";
			$confirm_password="";

			if (isset( $_POST['email'])) {
				$email=($_POST['email']);
			} else {
				$_SESSION['error'] =  "Valid email is missing.";
			}

			if(empty($_SESSION['error']))	{

				$user_array=array(
					"ID"=>$ID,								
					"username"=>$username, 
					"password"=>"", 
					"fullName"=>$firstname." ".$lastname ,
					"email"=>$email, 
					"level"=>2,
					"status"=>$status);
				$user = new Employee($user_array);

				$this->db->edit_Employee($user);

				$employees= $this->db->display_All_Employees();

				require_once 'view/employee/employee_dashboard.php';
			}
		}
	}

	public function deleteEmployee(){

		if(isset ($_GET['id'])){
			$this->db->delete_Employee($_GET['id']);
			$this->db->delete_Login($_GET['username']);
			$employees= $this->db->display_All_Employees();

			require_once 'view/employee/employee_dashboard.php';
		}
	}

	public function getEmployee(){

		if(isset ($_GET['id'])){
			$userForEdit = $this->db->get_Single_Emplyee_byID($_GET['id']);

			require_once 'view/employee/employee_edit.php';
		}
	}

	public function getAllClients(){
		$customers = $this->db->display_All_Customers();

		require_once 'view/employee/customer_dashboard.php';
	}


	public function validate(){
		if(isset ($_GET['userID'])){
			$user_identity = self::myDecoding($_GET['userID']);
			$isActivate= $this->db->activateUser($user_identity);
			$single_user=$this->db->getUserByUsername($user_identity);
			$user_forEmail=new User($single_user);
			$user_forEmail->sendEmail("Confirmation","Thank you for Confirmation!!!");
			header("Location: http://localhost/jamparo/Module4/Lab/Lab4/index.php");
		}
	}

	public function getAllEmplyees(){
		$employees= $this->db->display_All_Employees();
		require_once "view/employee/employee_dashboard.php";

	}

	public function addNewCustomer() {
		// $cars=$this->db->display_All_Cars();
		require_once "view/employee/customer_add.php";
	}

	public function addCustomer() 	{
		date_default_timezone_set("America/New_York");

		if(isset($_POST['saveCustomer'])){

			if (isset( $_POST['firstname'])) {
				$firstname=($_POST['firstname']);
			} else {
				$_SESSION['error'] =  "First name can't be empty.";
			}

			if (isset($_POST['lastname'])) {
				$lastname=($_POST['lastname']);
			} else {
				$_SESSION['error'] =  "Last name can't be empty.";
			}

			if (isset($_POST['username'])) {
				$username=($_POST['username']);
			} else {
				$_SESSION['error'] =  "Username can't be empty.";
			}

			if (isset($_POST['password'])) {
				$password=$_POST['password'];
			} else {
				$_SESSION['error'] =  "Password can't be empty.";
			}

			if (isset($_POST['confirmpassword'])) {
				$confirmpassword=($_POST['confirmpassword']);
			} else {
				$_SESSION['error'] =  "Confirm password can't be empty.";
			}

			if (isset($_POST['dateofBirth'])) {
				$dateofBirth=$_POST['dateofBirth'];
			} else {
				$_SESSION['error'] =  "Date of birth can't be empty.";
			}

			if (isset( $_POST['phone'])) {
				$phone=($_POST['phone']);
			} else {
				$_SESSION['error'] =  "Phone number can't  be empty.";
			}

			if (isset($_POST['customerEmail'])) {
				$customerEmail=($_POST['customerEmail']);
			} else {
				$_SESSION['error'] =  "email can't be empty.";
			}

			if (isset($_POST['address'])) {
				$address=($_POST['address']);
			} else{
				$_SESSION['error'] =  "Address can't be empty.";
			}

			if (isset($_POST['customerDriverLicence'])) {
				$customerDriverLicence=($_POST['customerDriverLicence']);
			} else {
				$_SESSION['error'] =  "Driver Licence can't be empty.";
			}

			if (isset($_POST['creditCard'])) {
				$creditCard=$_POST['creditCard'];
			} else {
				$_SESSION['error'] =  "credit card can't be empty.";
			}

			if($password!=$confirmpassword){
				$_SESSION['error'] =  "Password and confirm password does not match.";
			}

			if(empty($_SESSION['error']))	{
				$cust_array=array(									
					"ID"=>0, 
					"username"=>$username, 
					"password"=>md5($password),
					"fullName"=>$firstname ." ". $lastname, 
					"dateofBirth"=> $dateofBirth,
					"phone"=>$phone,
					"customerEmail"=>$customerEmail,
					"address"=>$address,
					"customerDriverLicence"=>$customerDriverLicence,
					"creditCard"=>$creditCard
				);

				$customer=new Customer($cust_array);
				$login_array=array(
					"ID"=>0,
					"username"=>$username,
					"password"=>md5($password),
					"level"=>3,
					"valid"=>0
				);

				$loginUser=new Login($login_array);

				$this->db->add_Customer($customer);
				$this->db->add_Login($loginUser);
			}
		}

		$customers = $this->db->display_All_Customers();

		require_once 'view/employee/customer_dashboard.php';
	}

	public function getSingleCustomer(){
		if(isset ($_GET['id'])){
			$customerEdit = $this->db->display_Single_Customer($_GET['id']); 			
			require_once 'view/employee/customer_edit.php';
		}
	}

	public function editCustomer() {

		if(isset($_POST['editCustomer'])){
			if (isset( $_POST['ID'])) {
				$ID=$_POST['ID'];
			} else {
				$_SESSION['error'] =  "ID can't be empty.";
			}

			// if (isset($_POST['fullName'])) {
			// 	$fullName=$_POST['fullName'];
			// } else {
			// 	$_SESSION['error'] =  "Full name can't be empty.";
			// }

			if (isset($_POST['firstname'])) {
				$firstname=$_POST['firstname'];
			} else {
				$_SESSION['error'] =  "First name can't be empty.";
			}
			
			if (isset($_POST['lastname'])) {
				$lastname=$_POST['lastname'];
			} else {
				$_SESSION['error'] =  "Last name can't be empty.";
			}

			if (isset($_POST['username'])) {
				$username=$_POST['username'];
			} else {
				$_SESSION['error'] =  "Username can't be empty.";
			}

			if (isset($_POST['dateofBirth'])) {
				$dateofBirth=($_POST['dateofBirth']);
			} else {
				$_SESSION['error'] =  "Date of birth can't be empty.";
			}

			if (isset($_POST['phone'])) {
				$phone=($_POST['phone']);
			} else {
				$_SESSION['error'] =  "Phone number can't be empty.";
			}

			if (isset($_POST['customerEmail'])) {
				$customerEmail=($_POST['customerEmail']);
			} else {
				$_SESSION['error'] =  "email can't be empty.";
			}

			if (isset( $_POST['address'])) {
				$address=($_POST['address']);
			} else{
				$_SESSION['error'] =  "Address can't be empty.";
			}

			if (isset($_POST['customerDriverLicence'])) {
				$customerDriverLicence=($_POST['customerDriverLicence']);
			} else {
				$_SESSION['error'] =  "Driver Licence can't be empty.";
			}

			if (isset($_POST['creditCard']))  {
				$creditCard=$_POST['creditCard'];
			} else {
				$_SESSION['error'] =  "Credit card can't be empty.";
			}

			if(empty($_SESSION['error'])){
				$cust_array=array(									
					"ID"=>$ID, 
					"username"=>$username, 
					"password"=>"",
					"fullName"=>$firstname ." ". $lastname, 
					"dateofBirth"=>$dateofBirth,
					"phone"=>$phone,
					"customerEmail"=>$customerEmail,
					"address"=>$address,
					"customerDriverLicence"=>$customerDriverLicence,
					"creditCard"=>$creditCard
				);
				$customer=new Customer($cust_array);
				$this->db->edit_Customer($customer);
			}
		} 
		$customers = $this->db->display_All_Customers();
		require_once 'view/employee/customer_dashboard.php';
	}

	public function deleteCustomer(){

		if(isset ($_GET['id'])){
			$this->db->delete_Customer($_GET['id']);
			$this->db->delete_Login($_GET['username']);
			$customers = $this->db->display_All_Customers();

			require_once 'view/employee/customer_dashboard.php';
		}
	}

	public function loginLogout(){

		require_once "view/customers/login.php";

	}

	public function logout(){

		if (isset($_SESSION["logged"])){
			unset($_SESSION["logged"]);
		}

		require_once "view/customers/login.php";
	}

	public function employee_passw_change(){

		if (isset($_SESSION["logged"])){
			if (isset($_POST['PasswordChangeEmployee'])) {


				if (isset( $_POST['oldPassword'])) {
					$oldpassword=md5($_POST['oldPassword']);
				} else {
					$_SESSION['error'] =  "Old Password can't be empty.";
				}

				if (isset( $_POST['password'])) {
					$password=md5($_POST['password']);
				} else {
					$_SESSION['error'] =  "New Password can't be empty.";
				}

				if (isset( $_POST['confirmpassword'])) {
					$confirmpassword=md5($_POST['confirmpassword']);
				} else {
					$_SESSION['error'] =  "Confirm password can't be empty.";
				}

				$user=$_SESSION['logged'];

				if($user!=null && !empty($user) && $oldpassword!=$user->getPassword()){
					$_SESSION['error'] =  "Old password does match";
				}

				if($password!=$confirmpassword){
					$_SESSION['error'] =  "password does match with confirm password";
				}

				if(empty($_SESSION['error'])){
					$login_array=array(
						"ID"=>$user->getID(),
						"username"=>$user->getUsername(),
						"password"=>($password),
						"level"=>$user->getLevel(),
						"valid"=>1
					);

					$loginUser=new Login($login_array);
					$this->db->employee_passw_change($loginUser);
					// unset($_SESSION['logged']);
					require_once "view/employee/index.php";
					echo '<script language="javascript">';
					echo 'alert("Password succesfully updated!")';
					echo '</script>';
				}
			}
		}
	}

	public function customer_passw_change(){

		if (isset($_SESSION["logged"])){
			if (isset($_POST['PasswordChangeCustomer'])) {


				if (isset( $_POST['oldPassword'])) {
					$oldpassword=md5($_POST['oldPassword']);
				} else {
					$_SESSION['error'] =  "Old Password can't be empty.";
				}

				if (isset( $_POST['password'])) {
					$password=md5($_POST['password']);
				} else {
					$_SESSION['error'] =  "New Password can't be empty.";
				}

				if (isset( $_POST['confirmpassword'])) {
					$confirmpassword=md5($_POST['confirmpassword']);

				} else {
					$_SESSION['error'] =  "Confirm password can't be empty.";
				}

				$user=$_SESSION['logged'];
				if($user!=null && !empty($user) && $oldpassword!=$user->getPassword()){
					$_SESSION['error'] =  "Old password doesn't match";
				}

				if($password!=$confirmpassword){
					$_SESSION['error'] =  "password does match with confirm password";
				}

				if(empty($_SESSION['error'])){
					$login_array=array(
						"ID"=>$user->getID(),
						"username"=>$user->getUsername(),
						"password"=>($password),
						"level"=>$user->getLevel(),
						"valid"=>1
					);

					$loginUser=new Login($login_array);
					$this->db->customer_passw_change($loginUser);
					unset($_SESSION['logged']);
					require_once "view/customers/index.php";
				}
			}
		}
	}

	public function passwordChangedViewEmployee(){
		if(isset($_SESSION['logged'])){
			require_once "view/employee/employee_password_change.php";
		}
	}

	public function passwordChangedViewCustomer(){
		if(isset($_SESSION['logged'])){
			require_once "view/customers/customer_password_change.php";
		}
	}

	public function addCustomerByCustomer() 	{
		date_default_timezone_set("America/New_York");

		if(isset($_POST['createCustomer'])){

			if (isset( $_POST['firstname'])) {
				$firstname=($_POST['firstname']);

			} else {
				$_SESSION['error'] =  "First name can't be empty.";
			}

			if (isset($_POST['lastname'])) {
				$lastname=($_POST['lastname']);
			} else {
				$_SESSION['error'] =  "Last name can't be empty.";
			}

			if (isset($_POST['username'])) {
				$username=($_POST['username']);
			} else {
				$_SESSION['error'] =  "Username can't be empty.";
			}

			if (isset($_POST['password'])) {
				$password=$_POST['password'];
			} else {
				$_SESSION['error'] =  "Password can't be empty.";
			}

			if (isset($_POST['confirmpassword'])) {
				$confirmpassword=($_POST['confirmpassword']);
			} else {
				$_SESSION['error'] =  "Confirm password can't be empty.";
			}

			if (isset($_POST['dateofBirth'])) {
				$dateofBirth=$_POST['dateofBirth'];
			} else {
				$_SESSION['error'] =  "Date of birth can't be empty.";
			}


			if (isset( $_POST['phone'])) {
				$phone=($_POST['phone']);
			} else {
				$_SESSION['error'] =  "Phone number can't  be empty.";
			}

			if (isset($_POST['customerEmail'])) {
				$customerEmail=($_POST['customerEmail']);
			} else {
				$_SESSION['error'] =  "email can't be empty.";
			}

			if (isset($_POST['address'])) {
				$address=($_POST['address']);
			} else{
				$_SESSION['error'] =  "Address can't be empty.";
			}

			if (isset($_POST['customerDriverLicence'])) {
				$customerDriverLicence=($_POST['customerDriverLicence']);
			} else {
				$_SESSION['error'] =  "Driver Licence can't be empty.";
			}

			if (isset($_POST['creditCard'])) {
				$creditCard=$_POST['creditCard'];
			} else {
				$_SESSION['error'] =  "creditCard can't be empty.";
			}

			if($password!=$confirmpassword){
				$_SESSION['error'] =  "Password and confirm password does not match.";
			}

			if(empty($_SESSION['error']))	{
				$cust_array=array(									
					"ID"=>0, 
					"username"=>$username, 
					"password"=>md5($password),
					"fullName"=>$firstname ." ". $lastname, 
					"dateofBirth"=> $dateofBirth,
					"phone"=>$phone,
					"customerEmail"=>$customerEmail,
					"address"=>$address,
					"customerDriverLicence"=>$customerDriverLicence,
					"creditCard"=>$creditCard
				);

				$customer=new Customer($cust_array);
				$login_array=array(
					"ID"=>0,
					"username"=>$username,
					"password"=>md5($password),
					"level"=>3,
					"valid"=>1 // Validate soon with email 
				);

				$loginUser=new Login($login_array);

				$this->db->add_Customer($customer);
				$this->db->add_Login($loginUser);
				$subject  = 'Email verification';
				$message  = 'Please click the link below to confirm registration.'."\n";
				$message =  $message. "<a href=/http://localhost:8080/PHPPROJMASTER/?controller=user&action=validateCustomer&userID=".self::myEncoding($username)."> click here </a>";

				echo $message;

				$sent_mail=$customer->sendEmail($subject,$message);

				if($sent_mail)
					echo "Email sent";
				else
					echo "Email sending failed";
			}
		}
		$customers = $this->db->display_All_Customers();

		require_once 'view/customers/index.php';
	}

	public function createAccountCustomerView(){

		require_once "view/customers/register.php";
	}


	public function	validateEmplyee(){
		if(isset($_GET['userID'])){
			$username=myDecoding($_GET['userID']);
			$this->db->UpdateValidation($username);
			require_once "view/customers/index.php";
		}

	}
	public function	validateCustomer(){
		if(isset($_GET['userID'])){
			$username=myDecoding($_GET['userID']);
			$this->db->UpdateValidation($username);
			require_once "view/customers/index.php";
		}

	}

	public function contactUs(){
		if(isset($_POST['SendEmail'])){
			if(isset($_POST['name'])){
				$name=$_POST['name'];
			} else {
				$_SESSION['error']="Name can't be empty";
			}

			if(isset($_POST['email'])){
				$email=$_POST['email'];
			} else {
				$_SESSION['error']="Email can't be empty";
			}

			if(isset($_POST['subject'])){
				$subject=$_POST['subject'];
			} else {
				$_SESSION['error']="Subject can't be empty";
			}

			if(isset($_POST['message'])){
				$message=$_POST['message'];
			} else {
				$_SESSION['error']="Message can't be empty";
			}

			if(empty($_SESSION['error'])){

				$sent_mail=self::sendEmail($subject,$message,$email);
				if($sent_mail)
					echo "Email sent";
				else
					echo "Email sending failed";
			}	
		}
	}

	function myEncoding($w){
		$encoding = strrev($w);
		$encoding = str_rot13($encoding);
		$encoding = base64_encode($encoding);
		return $encoding;
	}
	function myDecoding($w){
		$decoding = base64_decode($w);
		$decoding = str_rot13($decoding);
		$decoding = strrev($decoding);
		return $decoding;
	}

		// function sendEmail($subject, $msg_body, $email){
		// 	$to       = $email;
		// 	$headers  = 'From: jaymparo@gmail.com' . "\r\n" .
		// 	'MIME-Version: 1.0' . "\r\n" .
		// 	'Content-type: text/html; charset=utf-8';


		// 	if(mail($to, $subject, $msg_body, $headers))
		// 		return true;
		// 	else
		// 		return false;


		// }
}
?>