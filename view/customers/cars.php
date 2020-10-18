<?php include('includes/head.php'); ?>
<?php include('includes/head2.php'); ?>
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
                        <?php include('includes/cars.php');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>