<?php 

$user="";

if (isset($_SESSION["logged"])){

	$user=$_SESSION["logged"];

}

if(isset($_SESSION['error'] )) { ?>
	<script>
		alert ("<?php echo  ($_SESSION['error'] )?>");
	</script>  
	<?php unset($_SESSION['error']) ;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<base href="http://localhost:8080/PHPPROJMASTER/view/customers/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>

	<!-- Style Sheet -->

	<link href="../assets/css/style.css" rel="stylesheet" >

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

<body data-spy="scroll" data-target=".navbar" data-offset="100">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-light sticky-top nav-border-gray" style="background-color: white;">

		<!-- Container #1 -->
		<div class="container">

			<!-- Brand/logo -->
			<a class="navbar-brand" href="#">
				<img src="assets/images/icon.png" alt="Car Rental Logo" style="width:50px;">
			</a>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" href="../../?controller=index&action=view">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../?controller=car&action=carlisting">Cars</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../?controller=index&action=faq">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../../?controller=index&action=contact">Contact</a>
					</li>
					<?php if (isset($_SESSION["logged"])){ ?>
						<li
						<?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="passwordChangedViewCustomer") {?>
							class="active nav-item"
						<?php } ?>
						><a href="../../?controller=user&action=passwordChangedViewCustomer" class=" nav-link">Change Password</a></li>

					<?php } ?>
					<li class="nav-item">
						<a class="nav-link" href="carInfo.php">Car Info</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="rent.php">Rent</a>
					</li>
					<?php if ($user==null || empty($user) ) {?>
						<li 
						<?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
							class="active nav-item"
							<?php } ?>>
							<a class="nav-link" href="../../?controller=user&action=loginLogout">Login</a>
						</li> 

					<?php } else {?>

						<li
						<?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
							class="active nav-item"
							<?php } ?>>
							<a href="../../index.php/?controller=user&action=logout" class="nav-link">Logout</a></li>

						<?php } ?>

					</ul>
					<br>
					<!-- Register / Login button -->
					<div class="ml-5">

						<?php if ($user==null || empty($user) ) {?>
							<a <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
								class="active"
								<?php } ?> href="../../?controller=user&action=loginLogout">
								<button class=" btn btn-primary" role="button">Login / Register</button> 
							</a>
						<?php } else {?>

							<a <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
								class="active"
								<?php } ?> href="../../index.php/?controller=user&action=logout">
								<button class=" btn btn-primary" role="button">Logout</button> 

							</a>
						<?php } ?>

					</div>		
					<!-- End Links -->
				</div>

				<!-- End Nav -->
			</nav>
		</div>
	</nav>
