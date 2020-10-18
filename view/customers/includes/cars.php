<div class="card-grid">
    <?php foreach($cars as $key => $value) {
		        $car = new Car($value); ?>
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