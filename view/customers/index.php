<?php 
include('includes/header.php');
?>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/car1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/car2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/car7.jpg" alt="Third slide">
        </div>
    </div>
</div>
<!-- End Carousel -->

<!-- Toggleable Tabs -->
<div id="aboutUs" class="container" style="background-color: white; margin-bottom: 100px;">
    <br>
    <h2 class="text-center display-3 navy-blue">
        <span class="text-black">ABOUT </span>
        US
    </h2>
    <br>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" id="navTabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#welcome">Welcome</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#goal">Our goal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#history">Our history</a>
        </li>
        <!-- End Nav Tabs - moving onto filling the sections -->
    </ul>

    <!-- Tab panes -->
    <div class="row">
        <!-- Left half of tab panes -->
        <div class="tab-content col-sm-6">
            <!-- Welcome tab -->
            <div id="welcome" class="container tab-pane active">
                <br>
                <h3>HELLO AND <span class="navy-blue">WELCOME</span></h3>
                <p><i>TO MURDLOS RENTALS</i></p>
                <br>
                <p class="lead"> Established for more than 29 years, Murdlo's Rentals offers the top and most affordable
                    car rentals in Montreal. Cars can also be rented out for specific needs. We're active in the great
                    city of Montreal. Here are few places we send our cars to but not limited to:
                    <br>
                    <hr>
                    <ul>
                        <li>Sherbrooke</li>
                        <li>Quebec</li>
                        <li>New York</li>
                        <li>Toronto</li>
                        <li>And many more locations...</li>
                    </ul>
                    <!-- End Welcome Tab -->
            </div>
            <!-- Goal tab -->
            <div id="goal" class="container tab-pane fade"><br>
                <h3>A WORD FROM THE <span class="navy-blue">PRESIDENT</span></h3>
                <br>
                <p><i>"Our main goal is to provide and maintain a the best car rentals available in Montreal and
                        surronding areas around us. We provide quick, reliable 24 hour service. We have a wide variety
                        of cars so you're not limited by options but overwhelmed about which one you'll be renting from
                        us."</i>
                    <br>
                    <br>
                    We are at your entire disposition to answer your inquiries related to the above mentioned
                    proposition.
                    <br>
                    <br>
                    <b>- Jonathan Amparo</b></p>
                <br>
                <!-- End Goal Tab -->
            </div>
            <!-- History tab -->
            <div id="history" class="container tab-pane fade"><br>
                <h3>THE COMPANY'S <span class="navy-blue">HISTORY</span></h3>
                <br>
                <p class="lead">Founded in 1982 by Jonathan Amparo, MurdLo Rental Inc. offers cars for many
                    different purposes. We are proud to have amongst our clients many renowned companies and
                    organizations.</p>
                <!-- End History Tab -->
            </div>
            <!-- End of toggeable tabs -->
        </div>

        <!-- Right half of page (picture) -->
        <img src="../assets/images/carTrans.png" class="rounded col-sm-6" alt="Side car"
            style="width: 250px; height: 400px;">
    </div>
    <!-- End of toggle Tabs -->
</div>


<?php include('includes/footer.php'); ?>