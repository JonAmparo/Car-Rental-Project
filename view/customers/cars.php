<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="py-5">
    <div class="container">
        <h1 class="text-center navy-blue">
            <span class="text-black">OUR </span>
            CARS
        </h1>
        <div class="row">
            <div class="tab-content">
                <div id="procedure" class="container tab-pane active">
                    <h3>AVAILABLE <span class="navy-blue">CARS FOR RENT</span></h3>
                    <p><i>TO MURDLO'S RENTALS<span class="navy-blue"> CARS AVAILABLE FOR RENT</span></i></p>

                    <div class="container h-100" id="Luxury">
                        <div class="col-md-12 content car-listing" id="content">
                            <?php 
						foreach ($cars as $key => $value) {
							$car = new Car( $value); ?>
                            <?php if(($car->getStatus()==1) ){ ?>
                            <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                                <div class="media">
                                    <a class="media-link" data-gal="prettyPhoto" href="<?= $car->getImage() ?>">
                                        <img src="<?= $car->getImage() ?>" width="200" height="150" alt="car image" />
                                    </a>
                                </div>
                                <div class="caption pt-3">
                                    <h4 class="caption-title">
                                        <!-- <p class="text-primary"><?= $car->getBrand() ?></p> -->
                                        <a
                                            href="?controller=car&action=carDisplay&id=<?=$car->getCarID()?>"><?= $car->getBrand() ?></a>
                                    </h4>
                                    <h5 class="caption-title-sub">Price: <?= $car->getRentPrice()?>$ per a day</h5>
                                    <div class="caption-text">Find the best car at minimum cost!</div>
                                    <table class="table">
                                        <tr>
                                            <td>Type: <?= $car->getModel() ?></td>
                                            <td>Gas Consumption: <?= $car->getGasConsumption() ?></td>
                                            <td>Tank Capacity: <?= $car->getTankCapacity() ?></td>
                                            <td>Amount of passengers: <?= $car->getNumberofPassenger() ?></td>
                                            <?php if($user!=null || !empty($user)){ ?>
                                            <td class="buttons"><a class="btn btn-primary"
                                                    href="?controller=rental&action=reservation&carId=<?=$car->getCarID()?>">Rent
                                                    It</a></td>
                                            <?php }else{ ?>
                                            <td class="buttons"><a class="btn btn-primary"
                                                    href="?controller=user&action=loginLogout">Rent It</a>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <?php  } ?>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>