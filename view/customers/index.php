<?php include('includes/head2.php');?>
<?php include('includes/header2.php'); 
// var_dump($user); 
 ?>

<section class="sliding-wrapper">
    <div class="sliding-hero">
        <div class="hero-container">
            <div class="hero-cta row align-items-center h-100">
                <h1 class="hero-title text-center w-100">ELEVATE YOUR LIFESTYLE</h1>
                <h2 class="hero-small text-center w-100">The Premier Exotic Car Rental Service<br /> In Montréal, Québec
                </h2>
                <button class="hero-btn">
                    View Fleet
                </button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container text-center">
        <h2>First Class Exotic Car Rental In Quebec</h2>
        <p>We offer exotic car rental & limousine services in our range of high-end vehicles</p>
    </div>

    <div class="container">
        <?php foreach($cars as $key => $value) {
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
                    <a href="?controller=car&action=carDisplay&id=<?=$car->getCarID()?>"><?= $car->getBrand() ?></a>
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
                        <td class="buttons"><a class="btn btn-primary" href="?controller=user&action=loginLogout">Rent
                                It</a>
                        </td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
        </div>
        <?php  } ?>
        <?php  } ?>
    </div>
</section>




<!-- <?php include('includes/footer2.php'); ?> -->