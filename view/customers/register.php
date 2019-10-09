<?php 
include('includes/header.php');

?> 

<?php 
if(!isset($_SESSION)){
	session_start();
}

$user="";

if (isset($_SESSION["logged"])){

	$user=$_SESSION["logged"];

	var_dump($user);
}

if(isset($_SESSION['error'] )) { ?>
	<script>
		alert ("<?php echo  ($_SESSION['error'] )?>");
	</script>  
	<?php unset($_SESSION['error']) ;} 

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<base href="http://localhost:8080/PHPPROJMASTER/view/customers/">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Home - Car Rental</title>

		<!-- Style Sheet -->
		<link rel="stylesheet" href="../assets/css/style.css">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,600i,700" rel="stylesheet">
		<!-- including boostrap from cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Font Awesome  -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
		integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
		crossorigin="anonymous"></script>
		<!-- icon -->
		<link rel="icon" type="image/png" href="../assets/images/icon.png">
		<link rel="icon" type="image/png" href="../../assets/images/icon.png">
		<link rel="icon" type="image/png" href="../../../assets/images/icon.png">
		<link rel="icon" type="image/png" href="../../../../assets/images/icon.png">
		<!-- icon -->
		<link rel="icon" type="image/png" href="../../assets/img/guard.png">
		

	</head>


	<!-- Start  -->
	<div class="container" >
		<br>
		<br>
		<h1 class="text-center navy-blue" >
			<span class="text-black">REGIS</span>TER
		</h1> 
		<hr>
		<!-- End-->

		<!-- Default form login -->
		<form >
			<p class="h4 text-center mb-4"></p>

			<!-- PAGE -->
			<section class="page-section color">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h3 class="block-title"><span>Add Customer</span></h3>
							<form role="form" action="index.php/?controller=user&action=addCustomerByCustomer" method="POST" id="form_customer" name="form_customer ">

								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="firstname" id="firstname" class="form-control" placeholder="first name">
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="lastname" id="lastname" class="form-control" placeholder="last name">
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" id="username" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" id="password" class="form-control">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
								</div>
								<div class="form-group">
									<label>Date of Birth</label>
									<input type="date" name="dateofBirth" id="dateofBirth" max="1999-06-18" min="1949-06-18" class="form-control" placeholder="mm/dd/yyyy">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" name="phone" id="phone" class="form-control" placeholder="###-###-####">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" name="customerEmail" id="customerEmail" class="form-control" placeholder="email@something.com">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" id="address" class="form-control" placeholder="123 address">
								</div>
								<div class="form-group">
									<label>Driver Licence</label>
									<input type="number" name="customerDriverLicence" id="customerDriverLicence" class="form-control">
								</div>
								<div class="form-group">
									<label>Credit Card Number</label>
									<input type="number" name="creditCard" id="creditCard" class="form-control">
								</div>
								<button type="submit" name="createCustomer" class="btn btn-primary">Save</button>
								<button type="reset" class="btn btn-success">Reset Button</button>

							</form>

						</div>

					</div>
				</div>
			</section>
			<!-- /PAGE -->
			<p class="text-center">
				Already have an account? 
				<a href="login.php">
					Login here!
				</a>
			</p>
			<br>
		</form>

		<!-- Default form login -->
	</div>	

	<!-- Bottom footer - Copyright and stuff -->
	<footer id="botFooter">
		<div class="container">
			<hr>
			<p>Copyright &copy; 2019 Stuff Jon Things</p>
			<hr style="width: 100px">
			<p>Website created by <a href="#">Jonathan Amparo</a></p>
			<hr>
		</div>
		<!-- End of bottom Footer -->
	</footer>

	<!-- Bootstrap requires jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- bootstrap 4 requires popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>

	<!-- including boostrap from cdn -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>


	<!-- Functions & Plugins -->
	<script>

		$(function(){
			$("#form_customer").submit(function(e){
				var validated = true,
				firstname = $("input[name='firstname']"),
				lastname = $("input[name='lastname']"),
				username = $("input[name='username']"),
				password = $("input[name='password']"),
				confirmpassword = $("input[name='confirmpassword']"),
				dateofBirth = $("input[name='dateofBirth']"),
				phone = $("input[name='phone']"),
				customerEmail = $("input[name='customerEmail']"),
				address = $("input[name='address']"),
				customerDriverLicence = $("input[name='customerDriverLicence']"),
				creditCard = $("input[name='creditCard']");


				$(this).find(".error").remove();


				if(lastname.val().length < 1){
					validated = false;
					lastname.css("border-color", "red");
					lastname.parent().append("<span class='error'>Your lastname cannot be less than 1 character</span>");
					$(".error").fadeIn(500);
				}else{
					lastname.css("border-color", "green");
					lastname.parent().find(".error").remove();
				}


				if(firstname.val().length < 1){
					validated = false;
					firstname.css("border-color", "red");
					firstname.parent().append("<span class='error'>Your firstname cannot be less than 1 character</span>");
					$(".error").fadeIn(500);
				}else{
					firstname.css("border-color", "green");
					firstname.parent().find(".error").remove();
				}

				if(username.val().length < 5){
					validated = false;
					username.css("border-color", "red");
					username.parent().append("<span class='error'>Your username cannot be less than 5 characters.</span>");
					$(".error").fadeIn(500);
				}else{
					username.css("border-color", "green");
					username.parent().find(".error").remove();
				}


				if(password.val().length <5 ){
					validated = false;
					password.css("border-color", "red");
					password.parent().append("<span class='error'> Your password cannot be less than characters.</span>");
					$(".error").fadeIn(500);
				}else{
					password.css("border-color", "green");
					password.parent().find(".error").remove();
				}

				if(confirmpassword.val().length < 5 || ( confirmpassword.val()!=  password.val())) {
					validated = false;
					confirmpassword.css("border-color", "red");
					confirmpassword.parent().append("<span class='error'>Your confirmpassword doesn't match. </span>");
					$(".error").fadeIn(500);
				}else{
					confirmpassword.css("border-color", "green");
					confirmpassword.parent().find(".error").remove();
				}
				if( dateofBirth.val().length < 1){
					validated = false;
					dateofBirth.css("border-color", "red");
					dateofBirth.parent().append("<span class='error'>Your date of birth cannot be empty or an invalid date.</span>");
					$(".error").fadeIn(500);
				}else{
					dateofBirth.css("border-color", "green");
					dateofBirth.parent().find(".error").remove();
				}




				if(phone.val().length < 4){
					validated = false;
					phone.css("border-color", "red");
					phone.parent().append("<span class='error'> Please enter a valid phone no. </span>");
					$(".error").fadeIn(500);
				}else{
					phone.css("border-color", "green");
					phone.parent().find(".error").remove();
				}


				if(address.val().length < 1){
					validated = false;
					address.css("border-color", "red");
					address.parent().append("<span class='error'>Your address cannot be empty. </span>");
					$(".error").fadeIn(500);
				}else{
					address.css("border-color", "green");
					address.parent().find(".error").remove();
				}
				if(customerDriverLicence.val().length < 4){
					validated = false;
					customerDriverLicence.css("border-color", "red");
					customerDriverLicence.parent().append("<span class='error'>Please give a valid driver license .</span>");
					$(".error").fadeIn(500);
				}else{
					customerDriverLicence.css("border-color", "green");
					customerDriverLicence.parent().find(".error").remove();
				}

				if( creditCard.val().length < 4){
					validated = false;
					creditCard.css("border-color", "red");
					creditCard.parent().append("<span class='error'>Your creditCard cannot be empty or invalid number.</span>");
					$(".error").fadeIn(500);
				}else{
					creditCard.css("border-color", "green");
					creditCard.parent().find(".error").remove();
				}

				if(validated){
					msg = "Your information:\n";
					msg += "Lastname: " + lastname.val() + "\n";
					msg += "Firstname: " + firstname.val() + "\n";
					msg += "Password: " + password.val() + "\n";
					msg += "Date of Birth: " + dateofBirth.val() + "\n";
					msg += "Number of passenger(s): " + phone.val() + "\n";
					msg += "Address: " + address.val() + "\n";
					msg += "Phone: " + phone.val() + "\n";
					msg += "CustomerDriverLicencess: " + customerDriverLicence.val() + "\n";



					var yess= confirm(msg);
					if (yess){
                /*    parent.$.colorbox.close();
                */    return true;
                /*   closeWin();*/

            }
            else
            	return false;
        }
        return false;
    })

$("#form_customer").on('reset', function(e){
	/*location.reload();*/
/*                $(this).find(".error").remove();
*/                  
firstname = $("input[name='firstname']"),
lastname = $("input[name='lastname']"),
username = $("input[name='username']"),
password = $("input[name='password']"),
confirmpassword = $("input[name='confirmpassword']"),
dateofBirth = $("input[name='dateofBirth']"),
phone = $("input[name='phone']"),
customerEmail = $("input[name='customerEmail']"),
address = $("input[name='address']"),
customerDriverLicence = $("input[name='customerDriverLicence']"),
creditCard = $("input[name='creditCard']");







lastname.css("border-color", "inherit");
lastname.parent().find(".error").remove();

firstname.css("border-color", "inherit");
firstname.parent().find(".error").remove();

username.css("border-color", "inherit");
username.parent().find(".error").remove();

password.css("border-color", "inherit");
password.parent().find(".error").remove();

confirmpassword.css("border-color", "inherit");
confirmpassword.parent().find(".error").remove();

dateofBirth.css("border-color", "inherit");
dateofBirth.parent().find(".error").remove();

phone.css("border-color", "inherit");
phone.parent().find(".error").remove();

address.css("border-color", "inherit");
address.parent().find(".error").remove();

customerDriverLicence.css("border-color", "inherit");
customerDriverLicence.parent().find(".error").remove();


creditCard.css("border-color", "inherit");
creditCard.parent().find(".error").remove();


});
});
</script>

</body>

</html>
