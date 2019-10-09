<?php 
$user="";

if (isset($_SESSION["logged"])){

	$user=$_SESSION["logged"];

}
?>


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light sticky-top nav-border-gray" style="background-color: white;">

	<!-- Container #1 -->
	<div class="container-fluid">

		<!-- Brand/logo -->
		<a class="navbar-brand" href="../../?controller=index&action=displayCarDashboard">
			<img src="../assets/images/icon.png" alt="Car Rental Logo" style="width:50px;">
		</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=index&action=displayCarDashboard">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=car&action=getAllCars">Cars</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=rental&action=getAllReservations"> Reservations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=rental&action=getAllRents">Rents</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="../../?controller=report&action=display_All_returns">Returns</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=user&action=getAllClients">Clients</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=report&action=getAllInvoices">Invoices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../?controller=user&action=passwordChangedViewEmployee">Change password</a>
				</li>

				<?php if ($user!=null && !empty($user) && $user->getLevel()==1){?>

					<li class="nav-item">
						<a class="nav-link" href="../../?controller=user&action=getAllEmplyees">Employees</a>
					</li>


					<li class="nav-item">
						<a class="nav-link" href="../../?controller=report&action=getAllReports">Reports</a>
					</li>

				<?php } ?>
			</ul>
			<br>
			<!-- Register / Login button -->

			<?php if ($user!=null && !empty($user)){?>

				<div class="ml-5">
					<a href="../../?controller=user&action=logout">
						<button class=" btn btn-primary" role="button">Logout</button> 
					</a>
				</div>

			<?php } else { ?>

				<div class="ml-5">
					<a href="../../?controller=user&action=login">
						<button class=" btn btn-primary" role="button">Logout</button> 
					</a>
				</div>
			<?php } ?>

		</div>
	</div>
</nav>
