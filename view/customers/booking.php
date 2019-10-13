<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>



<!-- <body id="home" class="wide"> -->

<!-- Container #1 -->
<div class="container py-4">
    <div class="content-area">
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
                        <form action="?controller=rental&action=addReservation" method="post" name="form_reserve"
                            class="form-delivery">
                            <h3 class="">Car Information</h3>
                            <div class="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img width="350" height="250" alt="car image"
                                            src="<?=$selected_car->getImage()?>">

                                    </div>
                                    <div class="col-md-3">
                                        <div class="car-details">
                                            <div class="list">
                                                <ul>
                                                    <li class="title">
                                                        <h2><?=$selected_car->getBrand()?>
                                                            <span><?=$selected_car->getModel()?></span> </h2>
                                                    </li>
                                                    <li> Num of Passenger(s) :
                                                        <?=$selected_car->getNumberofPassenger()?> persons</li>

                                                    <li> Gas Consumption :
                                                        <?=$selected_car->getGasConsumption()?>
                                                        lit/100km</li>

                                                    <li> Tank Capacity : <?=$selected_car->getTankCapacity()?>
                                                        lit/100km
                                                    </li>

                                                    <li> Price :$ <?=$selected_car->getRentPrice()?> /day</li>
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
                                                        <input type="text" class="form-control datepicker"
                                                            name="dateStart" id="formSearchUpDate2"
                                                            data-min="21/06/2018" placeholder="dd/mm/yyyy">
                                                        <span class="form-control-icon"></span>
                                                    </div>
                                                    <h5 class="widget-title-sub">End Date</h5>

                                                    <div class="media">
                                                        <input type="text" class="form-control datepicker"
                                                            name="dateEnd" id="formSearchOffDate2"
                                                            placeholder="dd/mm/yyyy">
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

                                <input type="hidden" name="customerID" id="customerID"
                                    value="<?=$selected_client->getCustomerID()?>">

                                <input type="hidden" name="carID" id="carID" value="<?=$selected_car->getCarID()?>">
                                <input type="hidden" name="rentPrice" id="rentPrice"
                                    value="<?=$selected_car->getRentPrice()?>">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="fd-name" id="fd-name" title="Name is required"
                                            data-toggle="tooltip" class="form-control alt" type="text"
                                            placeholder="First and Last name"
                                            value="<?=$selected_client->getFullName()?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="fd-name" id="fd-email" title="Email is required"
                                            data-toggle="tooltip" class="form-control alt" type="text"
                                            placeholder="Email Address:"
                                            value="<?=$selected_client->getCustomerEmail()?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control alt"
                                            title="Phone no. is required" type="text" placeholder="Phone Number:"
                                            value="<?=$selected_client->getPhone()?>"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control alt"
                                            title="Date of birth is required" name="dateOfBirth" id="dateOfBirth"
                                            type="text" placeholder="Date of Birth:"
                                            value="<?=$selected_client->getDateofBirth()?>"></div>
                                </div>
                            </div>

                            <h3 class="block-title alt">Payments options</h3>
                            <div class="panel-group payments-options" id="accordion" role="tablist"
                                aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="dot"></span> Credit Card #:&nbsp;
                                                <?= $selected_client->getCreditCard()?>
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
                                            class="form-control alt" placeholder="notes" cols="15" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="overflowed reservation-now1">
                                <div class="checkbox pull-left">
                                    <input id="accept" type="checkbox" name="accept" title="Please accept"
                                        data-toggle="tooltip">
                                    <label for="accept">I accept the Terms of Service</label>
                                </div>
                                <input type="submit" class="btn btn-primary pull-right" name="reservation"
                                    value="Reserve Now" />
                                <a class="btn pull-right btn-danger" href="?controller=index&action=view">Cancel</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
$(function() {
    $("#form_reserve").submit(function(e) {
        var validated = true,
            dateStart = $("input[name='dateStart']"),
            dateEnd = $("input[name='dateEnd']");

        $(this).find(".error").remove();

        if (dateEnd.val().length < 1) {
            validated = false;
            dateEnd.css("border-color", "red");
            dateEnd.parent().append(
                "<span class='error'>Your dateEnd cannot be less than 1 character</span>"
            );
            $(".error").fadeIn(500);
        } else {
            dateEnd.css("border-color", "green");
            dateEnd.parent().find(".error").remove();
        }


        if (dateStart.val().length < 1) {
            validated = false;
            dateStart.css("border-color", "red");
            dateStart.parent().append(
                "<span class='error'>Your dateStart cannot be less than 1 character</span>"
            );
            $(".error").fadeIn(500);
        } else {
            dateStart.css("border-color", "green");
            dateStart.parent().find(".error").remove();
        }

        if (validated) {

            return true;

        } else
            return false;
        return false;
    })

});
</script>
</body>

</html>