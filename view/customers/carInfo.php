<?php 
include('includes/header.php');

?> 

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" style="height: 5%"  src="assets/images/car4.jpg" alt="First slide">
		</div>
	</div>
	<!-- End Carousel -->

</div>
<!-- Toggleable Tabs -->
<div class="container" style="background-color: white; margin-bottom: 100px;">
	<br>
	<h1 class="text-center navy-blue" >
		<span class="text-black">OUR </span>
		CARS
	</h1> 
	<br>

	<!-- Nav tabs -->
<!-- 	<ul class="nav nav-tabs" role="tablist" id="navTabs">
		<li class="nav-item">
			<a class="nav-link" href="3jobs.html#myCarousel">Job offer</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="#myCarousel">Procedure</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="3.2registration.html#myCarousel">Registration</a>
		</li>	
	</ul> -->
	<!-- End Nav Tabs - moving onto filling the sections -->

	<!-- Tab panes -->
	<div class="row">
		<!-- Left half of tab panes -->
		<div class="tab-content">
			<!-- procedure tab -->
			<div id="procedure" class="container tab-pane active">
				<br>
				<h3>AVAILABLE <span class="navy-blue">CARS FOR RENT</span></h3>
				<p><i>TO MURDLO'S RENTALS<span class="navy-blue"> CARS AVAILABLE FOR RENT</span></i></p>
				<br>

				<!-- Luxury - Cars  -->
				<div class="container h-100" id="Luxury">
					<h2>Luxury Cars</h2>
					<br>


					<!-- Car #1 -->
					<div class="card" style="width:32%; float: left">
						<img class="card-img-top" src="assets/images/car2.jpg" alt="Card image" style="width:100%">
						<div class="card-body">
							<a href="#" data-toggle="tooltip" data-placement="left" title="The best game ever">Mercedez</a>
							<h5 class="float-right">$24.99</h5>
							<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipsicing elit.</p>		        

							<!-- Button to Open the Modal -->
							<a class="float-right" href="#" data-toggle="modal" data-target="#myModal">15 reviews</a>

							<!-- The Modal -->
							<div class="modal fade" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header text-center">
											<h2 class="col-sm-10 modal-title text-center">Reviews</h2>
											<button type="button" class="col-1 close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body #1 -->
										<div class="modal-body">
											<div class="row">
												<h5 class="col-sm-10 offset-md-2 text-dark">
													Review #1 
													<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
														🕔 April 15, 2018 at 4:49 PM
													</span>
												</h5>
											</div>
											<img src="assets/images/people1.jpg" class="rounded-circle float-left" alt="People1">					    
											<div class="row">
												<p class="col-sm-12">
													Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
												</p>
											</div>
										</div>

										<!-- Modal body #2 -->
										<div class="modal-body">
											<div class="row">
												<h5 class="col-sm-10 offset-md-2 text-dark">
													Review #2 
													<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
														🕔 April 15, 2018 at 4:49 PM
													</span>
												</h5>
											</div>
											<img src="assets/images/people2.png" class="rounded-circle float-left" alt="People2">					    
											<div class="row">
												<p class="col-sm-12">
													Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
												</p>
											</div>
										</div>
									</div>		    
								</div>			
							</div>		
						</div>
					</div>
				</div>
				<!-- End of Car body -->

				<!-- Car #2 -->
				<div class="card" style="width: 32%;float: left; margin-left: 15px;">
					<img class="card-img-top" src="assets/images/car8.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<a href="#" data-toggle="tooltip" data-placement="left" title="The best game ever">Audi</a>
						<h5 class="float-right">$64.99</h5>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipsicing elit.</p>

						<!-- Button to Open the Modal -->
						<a class="float-right" href="#" data-toggle="modal" data-target="#myModal">12 reviews</a>

						<!-- The Modal -->
						<div class="modal fade" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header text-center">
										<h2 class="col-sm-10 modal-title text-center">Reviews</h2>
										<button type="button" class="col-1 close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body #1 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #1 
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people1.jpg" class="rounded-circle float-left" alt="People1">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>

									<!-- Modal body #2 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #2 
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people2.png" class="rounded-circle float-left" alt="People2">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>

									<!-- Modal body #3 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #3
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people3.jpg" class="rounded-circle float-left" alt="People3">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>			    
								</div>			
							</div>		
						</div>
					</div>
				</div>
				<!-- End of car body -->

				<!-- car #2 -->
				<div class="card" style="width: 32%;float: left; margin-left: 15px;">
					<img class="card-img-top" src="assets/images/car1.jpg" alt="Card image" style="width:100%" >
					<div class="card-body">
						<a href="#" data-toggle="tooltip" data-placement="left" title="The best game ever">Tesla</a>
						<h5 class="float-right">$74.99</h5>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipsicing elit.</p>

						<!-- Button to Open the Modal -->
						<a class="float-right" href="#" data-toggle="modal" data-target="#myModal">31 reviews</a>

						<!-- The Modal -->
						<div class="modal fade" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header text-center">
										<h2 class="col-sm-10 modal-title text-center">Reviews</h2>
										<button type="button" class="col-1 close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body #1 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #1 
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people1.jpg" class="rounded-circle float-left" alt="People1">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>

									<!-- Modal body #2 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #2 
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people2.png" class="rounded-circle float-left" alt="People2">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>

									<!-- Modal body #3 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #3
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people3.jpg" class="rounded-circle float-left" alt="People3">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>			    
								</div>			
							</div>		
						</div>
					</div>
					<!-- End of Card body -->	
				</div>

				<!-- Category 2 - Cars  -->
				<div class="container h-100" id="category2" style="float: left">
					<h2>Category 2</h2>
					<br>
				</div>


				<!-- Car #1 -->
				<div class="card" style="width:32%; float: left">
					<img class="card-img-top" src="assets/images/car10.jpg" alt="Card image" style="width:100%">
					<div class="card-body">
						<a href="#" data-toggle="tooltip" data-placement="left" title="The best game ever">Volkswagon</a>
						<h5 class="float-right">$24.99</h5>
						<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipsicing elit.</p>		        

						<!-- Button to Open the Modal -->
						<a class="float-right" href="#" data-toggle="modal" data-target="#myModal">15 reviews</a>

						<!-- The Modal -->
						<div class="modal fade" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header text-center">
										<h2 class="col-sm-10 modal-title text-center">Reviews</h2>
										<button type="button" class="col-1 close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body #1 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #1 
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people1.jpg" class="rounded-circle float-left" alt="People1">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>

									<!-- Modal body #2 -->
									<div class="modal-body">
										<div class="row">
											<h5 class="col-sm-10 offset-md-2 text-dark">
												Review #2 
												<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
													🕔 April 15, 2018 at 4:49 PM
												</span>
											</h5>
										</div>
										<img src="assets/images/people2.png" class="rounded-circle float-left" alt="People1">					    
										<div class="row">
											<p class="col-sm-12">
												Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
											</p>
										</div>
									</div>
								</div>		    
							</div>			
						</div>		
					</div>
				</div>
			</div>
			<!-- End of Car body -->

			<!-- Car #2 -->
			<div class="card" style="width: 32%;float: left; margin-left: 15px;">
				<img class="card-img-top" src="assets/images/car12.jpg" alt="Card image" style="width:100%">
				<div class="card-body">
					<a href="#" data-toggle="tooltip" data-placement="left" title="The best game ever">Honda</a>
					<h5 class="float-right">$64.99</h5>
					<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipsicing elit.</p>

					<!-- Button to Open the Modal -->
					<a class="float-right" href="#" data-toggle="modal" data-target="#myModal">12 reviews</a>

					<!-- The Modal -->
					<div class="modal fade" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header text-center">
									<h2 class="col-sm-10 modal-title text-center">Reviews</h2>
									<button type="button" class="col-1 close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body #1 -->
								<div class="modal-body">
									<div class="row">
										<h5 class="col-sm-10 offset-md-2 text-dark">
											Review #1 
											<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
												🕔 April 15, 2018 at 4:49 PM
											</span>
										</h5>
									</div>
									<img src="assets/images/people1.jpg" class="rounded-circle float-left" alt="People1">					    
									<div class="row">
										<p class="col-sm-12">
											Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
										</p>
									</div>
								</div>

								<!-- Modal body #2 -->
								<div class="modal-body">
									<div class="row">
										<h5 class="col-sm-10 offset-md-2 text-dark">
											Review #2 
											<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
												🕔 April 15, 2018 at 4:49 PM
											</span>
										</h5>
									</div>
									<img src="assets/images/people2.png" class="rounded-circle float-left" alt="People2">					    
									<div class="row">
										<p class="col-sm-12">
											Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
										</p>
									</div>
								</div>

								<!-- Modal body #3 -->
								<div class="modal-body">
									<div class="row">
										<h5 class="col-sm-10 offset-md-2 text-dark">
											Review #3
											<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
												🕔 April 15, 2018 at 4:49 PM
											</span>
										</h5>
									</div>
									<img src="assets/images/people3.jpg" class="rounded-circle float-left" alt="People3">					    
									<div class="row">
										<p class="col-sm-12">
											Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
										</p>
									</div>
								</div>			    
							</div>			
						</div>		
					</div>
				</div>
			</div>
			<!-- End of car body -->

			<!-- car #2 -->
			<div class="card" style="width: 32%;float: left; margin-left: 15px;">
				<img class="card-img-top" src="assets/images/car14.jpg" alt="Card image" style="width:100%" >
				<div class="card-body">
					<a href="#" data-toggle="tooltip" data-placement="left" title="The best game ever">Toyota</a>
					<h5 class="float-right">$74.99</h5>
					<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipsicing elit.</p>

					<!-- Button to Open the Modal -->
					<a class="float-right" href="#" data-toggle="modal" data-target="#myModal">31 reviews</a>

					<!-- The Modal -->
					<div class="modal fade" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header text-center">
									<h2 class="col-sm-10 modal-title text-center">Reviews</h2>
									<button type="button" class="col-1 close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body #1 -->
								<div class="modal-body">
									<div class="row">
										<h5 class="col-sm-10 offset-md-2 text-dark">
											Review #1 
											<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
												🕔 April 15, 2018 at 4:49 PM
											</span>
										</h5>
									</div>
									<img src="assets/images/people1.jpg" class="rounded-circle float-left" alt="People1">					    
									<div class="row">
										<p class="col-sm-12">
											Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
										</p>
									</div>
								</div>

								<!-- Modal body #2 -->
								<div class="modal-body">
									<div class="row">
										<h5 class="col-sm-10 offset-md-2 text-dark">
											Review #2 
											<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
												🕔 April 15, 2018 at 4:49 PM
											</span>
										</h5>
									</div>
									<img src="assets/images/people2.png" class="rounded-circle float-left" alt="People2">					    
									<div class="row">
										<p class="col-sm-12">
											Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
										</p>
									</div>
								</div>

								<!-- Modal body #3 -->
								<div class="modal-body">
									<div class="row">
										<h5 class="col-sm-10 offset-md-2 text-dark">
											Review #3
											<span class="align-bottom small text-left font-weight-normal text-secondary margin-top: 5"> 
												🕔 April 15, 2018 at 4:49 PM
											</span>
										</h5>
									</div>
									<img src="assets/images/people3.jpg" class="rounded-circle float-left" alt="People3">					    
									<div class="row">
										<p class="col-sm-12">
											Cras sit amet nibh libero, in gravida nulla.  Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odlo, vestilbulum In vulputate at, tempus viverra turpis.
										</p>
									</div>
								</div>			    
							</div>			
						</div>		
					</div>
				</div>
				<!-- End of Card body -->

			</div>


		</div>
		<!-- End of Rows -->
	</div>

	<?php 

	include('includes/signup.php');

	?> 


	<!-- End of toggeable tabs -->
</div>

<!-- Right half of page (picture) -->
<!-- <img src="assets/img/sec1.png" class="rounded col-sm-6" alt="Agent" style="width: 328px; height: 523px;">  -->
</div>
<!-- End of toggle Tabs -->
</div>	

<?php 

include('includes/footer.php');

?> 