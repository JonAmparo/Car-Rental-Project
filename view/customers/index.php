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

<section class="cars">
    <div class="container">
        <div class="text-center pb-6 pt-2">
            <h2>First Class Exotic Car Rental In Montréal.</h2>
            <p>We offer exotic car rental & limousine services in our range of high-end vehicles</p>
        </div>

        <div class="card-grid">
            <?php foreach($cars as $key => $value) {
		        $car = new Car( $value); ?>
            <?php if(($car->getStatus()==1) ){ ?>
            <a class="" href="?controller=car&action=carDisplay&id=<?=$car->getCarID()?>">
                <div class="card" style="background-image: url(<?= $car->getImage() ?>)">
                    <div class="card-info">
                        <h1><?= $car->getBrand()?> <?= $car->getModel() ?></h1>
                    </div>

                    <div class="card-bottom-grid">
                        <div class="passenger-grid a">
                            <div><i class="fas fa-user-friends"></i></div>
                            <div><?= $car->getNumberofPassenger() ?></div>
                        </div>
                        <div class="info-grid b">
                            <div><i class="fas fa-gas-pump"></i></div>
                            <div><?= $car->getGasConsumption() ?></div>
                        </div>
                        <div class="price-grid c ">
                            <h2>$<?= $car->getRentPrice()?></h2>
                            <p class="small per-day">per day</p>
                        </div>

                    </div>
                </div>
            </a>
            <?php  } ?>
            <?php  } ?>
        </div>
    </div>
</section>

<section class="video-cta">
    <video class="video" playsinline autoplay muted loop poster="view/customers/assets/videos/video.mp4" id="bgvid">
        <source src="view/customers/assets/videos/video.mp4" type="video/mp4">
    </video>
</section>


<?php include('includes/footer2.php'); ?>