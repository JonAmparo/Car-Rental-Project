<?php 
include('includes/header.php');

?> 

</div>
<!-- Toggleable Tabs -->
<div class="container" style="background-color: white; margin-bottom: 100px;">
	<br>
	<h1 class="text-center navy-blue" >
		<span class="text-black">OUR </span>
		CARS
	</h1> 
	<br>

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

					<!-- CONTENT -->
					<div class="col-md-9 content car-listing" id="content">

						<!-- Car Listing -->

						<?php 
						foreach ($cars as $key => $value) {

							$car = new Car( $value); ?>

                            <?php if(($car->getStatus()==1) ){ ?>


                             <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                                <div class="media">
                                   <a class="media-link" data-gal="prettyPhoto" href="../../<?= $car->getImage() ?>">
                                      <img src="../../<?= $car->getImage() ?>"  width ="200" height="150" alt="car image"/>
                                  </a>
                              </div>
                              <div class="caption">
                                <h4 class="caption-title"><a href="../../index.php/?controller=car&action=carDisplay&id=<?=$car->getCarID()?>"><?= $car->getBrand() ?></a></h4>
                                <h5 class="caption-title-sub">Price: <?= $car->getRentPrice()?>$ per a day</h5>
                                <div class="caption-text">Find the best car at minimum cost!</div>
                                <table class="table">
                                   <tr>
                                      <td>Type: <?= $car->getModel() ?></td>

                                      <td>Gas Consumption: <?= $car->getGasConsumption() ?></td>

                                      <td>Tank Capacity: <?= $car->getTankCapacity() ?></td>

                                      <td>Amount of passengers: <?= $car->getNumberofPassenger() ?></td>


                                      <?php if($user!=null || !empty($user)){ ?>
                                          <td class="buttons"><a class="btn btn-theme" href="../../?controller=rental&action=reservation&carId=<?=$car->getCarID()?>">Rent It</a></td>


                                      <?php }else{ ?> 
                                          <td class="buttons"><a class="btn btn-theme" href="../../index.php/?controller=user&action=loginLogout">Rent It</a></td> 

                                      <?php } ?>

                                  </tr>
                              </table>
                          </div>
                      </div>
                  <?php  } ?>

              <?php  } ?>

          </div>
          <!-- End of Card body -->

      </div>

  </div>
  <!-- End of Rows -->
</div>

<!-- End of toggeable tabs -->
</div>

</div>
<!-- End of toggle Tabs -->
</div>	

<?php 

include('includes/footer.php');

?> 