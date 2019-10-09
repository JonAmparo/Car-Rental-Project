<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
	<div class="form-wrap">
		<div class="tab">
			
			<div class="tab-content">
				<div class="tab-content-inner active" data-content="signup">
					<h3>Make a Reservation</h3>
					<form action="pricing.php" method="POST">
						<input type="hidden" name="action" value="reservation">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="fullname">What is your Email?</label>
								<input type="text" id="fullname" name="email" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="activities">What type of car do you need?</label>
								<select name="model" id="activities" class="form-control">
									<option value="Sedan">Sedan</option>
									<option value="Hatchback">Hatchback</option>
									<option value="SUV">SUV</option>
									<option value="Van">Van</option>
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="destination">Where do you need the car?</label>
								<select name="destination" id="destination" class="form-control">
									<option value="">Montreal</option>
									<option value="">Quebec</option>
									<option value="">Ottawa</option>
									<option value="">Toronto</option>
								</select>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label for="date-start">Starting Date</label>
								<input type="text" name="dateStart" id="date-start" class="form-control hasDatepicker">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="date-return">Returning Date</label>
								<input type="text" name="dateReturn" id="date-return" class="form-control hasDatepicker">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-block" value="Submit">
							</div>
						</div>
					</form>	
				</div>

				
			</div>
		</div>
	</div>
</div>