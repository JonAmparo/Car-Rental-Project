<?php 
$user="";

if (isset($_SESSION["logged"])){

    $user=$_SESSION["logged"];

}

if(isset($_SESSION['error'] )) { ?>
    <script>
        alert ("<?php echo  ($_SESSION['error'] )?>");
    </script>  
    <?php unset($_SESSION['error']) ;} 
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <base href="http://localhost:8080/PHPPROJMASTER/view/customers/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Rent a car</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,600i,700" rel="stylesheet">

        <!-- including boostrap from cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Font Awesome  -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>

        <!-- CSS -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <!-- icon -->
        <link rel="icon" type="image/png" href="../assets/images/icon.png">
    </head>


    <body id="home" class="wide">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light sticky-top nav-border-gray" style="background-color: white;">

            <!-- Container #1 -->
            <div class="container">

                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">
                    <img src="assets/images/icon.png" alt="Car Rental Logo" style="width:50px;">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../../?controller=index&action=view">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../?controller=car&action=carlisting">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../?controller=index&action=faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../?controller=index&action=contact">Contact</a>
                        </li>
                        <?php if (isset($_SESSION["logged"])){ ?>
                            <li
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="passwordChangedViewCustomer") {?>
                                class="active nav-item"
                            <?php } ?>
                            ><a href="../../?controller=user&action=passwordChangedViewCustomer" class=" nav-link">Change Password</a></li>

                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="carInfo.php">Car Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rent.php">Rent</a>
                        </li>

                        <?php if ($user==null || empty($user) ) {?>

                            <li 
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                                class="active nav-item"
                                <?php } ?>>
                                <a class="nav-link" href="../../?controller=user&action=loginLogout">Login</a>
                            </li> 

                        <?php } else {?>

                            <li
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                                class="active nav-item"
                                <?php } ?>>
                                <a href="../../index.php/?controller=user&action=logout" class="nav-link">Logout</a></li>

                            <?php } ?>

                        </ul>
                        <br>
                        <!-- Register / Login button -->
                        <div class="ml-5">

                            <?php if ($user==null || empty($user) ) {?>
                                <a <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                                    class="active"
                                    <?php } ?> href="../../?controller=user&action=loginLogout">
                                    <button class=" btn btn-primary" role="button">Login / Register</button> 
                                </a>
                            <?php } else {?>

                                <a <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                                    class="active"
                                    <?php } ?> href="../../index.php/?controller=user&action=logout">
                                    <button class=" btn btn-primary" role="button">Logout</button> 

                                </a>
                            <?php } ?>

                        </div>      
                        <!-- End Links -->
                    </div>

                    <!-- End Nav -->
                </nav>
            </div>
        </nav>

        <div class="content-area">
            <br>
            <section class="page-section text-right">
                <div class="container">
                    <div class="page-header">
                        <h1>Book a car today!</h1>
                    </div>
                </div>
            </section>

            <section class="page-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 " id="">
                            <form action="../../?controller=rental&action=addReservation" method="post" name="form_reserve" class="form-delivery">
                                <h3 class="">Car Information</h3>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img width ="350" height="250" alt="car image" src="../../<?=$selected_car->getImage()?>">

                                        </div>
                                        <div class="col-md-3">
                                            <div class="car-details">
                                                <div class="list">
                                                    <ul>
                                                        <li class="title">
                                                            <h2><?=$selected_car->getBrand()?> <span><?=$selected_car->getModel()?></span> </h2>
                                                            
                                                        </li>
                                                        <li> Num of Passenger(s) : <?=$selected_car->getNumberofPassenger()?> persons</li>

                                                        <li> Gas Consumption : <?=$selected_car->getGasConsumption()?> lit/100km</li>

                                                        <li> Tank Capacity : <?=$selected_car->getTankCapacity()?> lit/100km</li>

                                                        <li> Price  :$ <?=$selected_car->getRentPrice()?> /day</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-3">

                                            <aside class="sidebar" id="sidebar">

                                                <div class="widget shadow widget-details-reservation">
                                                    <h4 class="widget-title">Detail Reservation</h4>
                                                    <div class="widget-content">
                                                        <h5 class="widget-title-sub">Start Date</h5>
                                                        <div class="media">
                                                           <input type="text" class="form-control datepicker" name="dateStart" id="formSearchUpDate2" data-min="21/06/2018" placeholder="dd/mm/yyyy">
                                                           <span class="form-control-icon"></span>
                                                       </div>
                                                       <h5 class="widget-title-sub">End Date</h5>

                                                       <div class="media">
                                                           <input type="text" class="form-control datepicker" name="dateEnd" id="formSearchOffDate2" placeholder="dd/mm/yyyy">
                                                           <span class="form-control-icon"></span>

                                                       </div>

                                                       <div class="button"></div>
                                                   </div>
                                               </div>

                                           </aside>
                                       </div>
                                   </div>
                               </div>

                               <hr class="page-divider half transparent" />

                               <h3 class="block-title alt">Customer Information</h3>

                               <div class="row">
                                <div class="col-md-12">
                                </div>

                                <input type= "hidden" name="customerID" id="customerID" value="<?=$selected_client->getCustomerID()?>">

                                <input type= "hidden" name="carID" id="carID" value="<?=$selected_car->getCarID()?>">
                                <input type= "hidden" name="rentPrice" id="rentPrice" value="<?=$selected_car->getRentPrice()?>">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="fd-name" id="fd-name" title="Name is required" data-toggle="tooltip"
                                        class="form-control alt" type="text" placeholder="First and Last name" value="<?=$selected_client->getFullName()?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="fd-name" id="fd-email" title="Email is required" data-toggle="tooltip"
                                        class="form-control alt" type="text" placeholder="Email Address:" value="<?=$selected_client->getCustomerEmail()?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control alt" title="Phone no. is required" type="text" placeholder="Phone Number:" value="<?=$selected_client->getPhone()?>"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control alt" title="Date of birth is required" name="dateOfBirth" id="dateOfBirth" type="text" placeholder="Date of Birth:" value="<?=$selected_client->getDateofBirth()?>"></div>
                                </div>
                            </div>

                            <h3 class="block-title alt">Payments options</h3>
                            <div class="panel-group payments-options" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="dot"></span> Credit Card #:&nbsp; <?= $selected_client->getCreditCard()?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <h3>Additional Information</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="notes" id="notes" title="Notes" data-toggle="tooltip"
                                        class="form-control alt" placeholder="notes" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="overflowed reservation-now1">
                                <div class="checkbox pull-left">
                                    <input id="accept" type="checkbox" name="accept" title="Please accept" data-toggle="tooltip">
                                    <label for="accept">I accept the Terms of Service</label>
                                </div>
                                <input type="submit" class="btn btn-theme pull-right btn-reservation-now" name="reservation" value="Reserve Now" />
                                <a class="btn btn-theme pull-right btn-cancel btn-theme-dark" href="../../?controller=index&action=view">Cancel</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts / Plugins -->
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/plugins/datetimepicker/js/moment-with-locales.min.js"></script>
    <script src="assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/theme-ajax-mail.js"></script>
    <script src="assets/js/theme.js"></script>    

    <script>

        $(function(){
            $("#form_reserve").submit(function(e){
                var validated = true,
                dateStart = $("input[name='dateStart']"),
                dateEnd = $("input[name='dateEnd']");

                $(this).find(".error").remove();

                if(dateEnd.val().length < 1){
                    validated = false;
                    dateEnd.css("border-color", "red");
                    dateEnd.parent().append("<span class='error'>Your dateEnd cannot be less than 1 character</span>");
                    $(".error").fadeIn(500);
                }else{
                    dateEnd.css("border-color", "green");
                    dateEnd.parent().find(".error").remove();
                }


                if(dateStart.val().length < 1){
                    validated = false;
                    dateStart.css("border-color", "red");
                    dateStart.parent().append("<span class='error'>Your dateStart cannot be less than 1 character</span>");
                    $(".error").fadeIn(500);
                }else{
                    dateStart.css("border-color", "green");
                    dateStart.parent().find(".error").remove();
                }

                if(validated){

                   return true;

               } else
                 return false;
             return false;
         })

        });
    </script>
</body>
</html>