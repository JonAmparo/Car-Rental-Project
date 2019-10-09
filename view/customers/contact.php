<?php 
include('includes/header.php');

?> 

<!-- Start  -->
<div class="container" >
	<br>
	<br>
	<h1 class="text-center navy-blue" >
		<span class="text-black">CONTACT </span>
		US
	</h1> 
	<br>
	<hr>
	<!-- End-->
</div>

<div class="container">                 
	<section class="section">

		<!--Section heading-->
		<h2 class="section-heading h1 pt-4"></h2>
		<!--Section description-->
		<p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
		matter of hours to help you.</p>

		<div class="row">

			<!--Grid column-->
			<div class="col-md-8 col-xl-9">
				<form id="contact-form" name="contact-form" action="mail.php" method="POST">

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form">
								<label for="name" class="">Your name</label>
								<div class="col-xs-4">
									<input type="text" class="form-control" name="firstName" placeholder="First name" />
								</div>
								<br>
								<div class="col-xs-4">
									<input type="text" class="form-control" name="lastName" placeholder="Last name" />
								</div>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form">
								
								<label for="email" class="">Your email</label>
								<div class="col-xs-5">
									<input type="text" class="form-control" name="email" placeholder="Example@gmail.com" />
								</div>
							</div>
						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->
					<br>

					<!--Grid row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<label for="subject" class="">Subject</label>
								<input type="text" id="subject" name="subject" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<!--Grid row-->

					
					<!--Grid row-->
					<div class="row">
						<!--Grid column-->
						<div class="col-md-12">
							<div class="md-form">
								<label for="message">Your message</label>
								<textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"></textarea>
							</div>
						</div>
					</div>
					<!--Grid row-->
				</form>
				<br>

				<div class="center-on-small-only">
					<button class="btn btn-primary" onclick="validateForm()">Send</button>
				</div>
				<div class="status"></div>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-4 col-xl-3">
				<ul>
					<li>
						<p><i class="fas fa-user-circle fa-2x"></i><br>
							Our team of advisors will ensure that your business with us will be a pleasent one. With our professional staff to meet your needs 24 hours a day, 7 days a week.
						</p>
					</li>
					<li><i class="fa fa-map-marker fa-2x"></i>
						<p>
							1337 St Denis St<br>
							Montreal, QC H2X 3K4
						</p>
					</li>

					<li><i class="fa fa-phone fa-2x"></i>
						<p>	
							<u>Customer Support:</u><br><span class="navy-blue">(514) 222-2222</span> <br>
							<u>Rent a car now:</u><br><span class="navy-blue">(514) 222-2222</span> <br>
							<u>Services/Emergency:</u><br><span class="navy-blue">(514) 222-2222</span> 
						</p>
					</li>

					<li><i class="fa fa-envelope fa-2x"></i>

						<a href="#">
							<p>MurdLosRental@gmail.com</p>
						</a>
					</li>
				</ul>
			</div>
			<!--Grid column-->

		</div>

	</section>
	<!--Section: Contact v.2-->
</div>

<hr>

<!-- Google map -->
<div class="container">
	<div class="row">
		<!-- Map plugin -->
		<div class="col-md-6 offset-md-1" style="margin-bottom: 25px;" id="map"></div>
	</div>
</div>

<!-- Scripts -->
<div>
	<!-- Bootstrap requires jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- bootstrap 4 requires popper.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- including boostrap from cdn -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Plugin #3 - Retrieves map information from Google -->
	<script src="http://maps.google.com/maps/api/js"></script>
	<!-- Plugin #3 - Retrieves plugin from gmaps-master -->
	<script src="assets/plugins/gmaps-master/gmaps.js"></script>

	<!-- Functions & Plugins -->
	<script >
		var map = new GMaps({
			el: '#map',
			zoom: 16,
			lat: 45.515552,
			lng: -73.564691
		});

		map.addMarker({
			lat: 45.515552,
			lng: -73.564691,
			title: 'MurdLo Rental',
			click: function(e) {
				alert('This is the office of MurdLosRental at 1337 St-Denis ');
			}
		});
	</script>
</div>

<?php 
include('includes/footer.php');

?> 