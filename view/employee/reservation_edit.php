<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container">
    <div id="wrapper">
        <div id="ptype-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Reservation</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" id="EditCar" name="EditReservation"
                        action="?controller=rental&action=edit_Reservation" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Reservation ID</label>
                            <input type="text" class="form-control" name="ID" id="ID"
                                value="<?=$singleReservation->getReservationID()?>" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label>Car ID</label>
                            <input type="text" name="carID" id="carID" class="form-control"
                                value="<?=$singleReservation->getCarID()?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label>Customer ID</label>
                            <input type="text" name="customerID" id="customerID" class="form-control"
                                value="<?=$singleReservation->getCustomerID()?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="text" name="dateStart" id="dateStart" readonly="readonly" class="form-control"
                                value="<?=$singleReservation->getDateStart()?>">
                        </div>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="text" name="dateEnd" id="dateEnd" class="form-control"
                                value="<?=$singleReservation->getDateEnd()?>">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" id="price" class="form-control"
                                value="<?=$singleReservation->getPrice()?>">
                        </div>
                        <div class="form-group">
                            <label>Term accepted</label>
                            <input type="text" name="tosAccepted" id="tosAccepted" class="form-control"
                                value="<?=$singleReservation->getTosAccepted()?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label>Inspected</label>
                            <input style="margin-left: 15px;" type="checkbox" name="inspected" id="inspected">
                        </div>


                        <div class="form-group">
                            <label>Notes</label>
                            <input type="text" name="notes" id="notes" class="form-control"
                                value="<?=$singleReservation->getNotes()?>">
                        </div>

                        <button type="submit" name="editResevation" class="btn btn-primary">Rent</button>
                        <button type="reset" class="btn btn-success">Reset Button</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>

<script>
$(function() {
    $("#EditReservation").submit(function(e) {
        var validated = true,
            dateStart = $("input[name='dateStart']"),
            dateEnd = $("input[name='dateEnd']"),
            price = $("input[name='price']");


        $(this).find(".error").remove();




        if (dateStart.val().length < 1) {
            validated = false;
            dateEnddateStart.css("border-color", "red");
            dateStart.parent().append("<span class='error'>Your dateStart cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            dateStart.css("border-color", "green");
            dateStart.parent().find(".error").remove();
        }

        if (dateEnd.val().length < 5) {
            validated = false;
            dateEnd.css("border-color", "red");
            dateEnd.parent().append("<span class='error'>Your dateEnd cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            dateEnd.css("border-color", "green");
            dateEnd.parent().find(".error").remove();
        }


        if (price.val().length < 4) {
            validated = false;
            price.css("border-color", "red");
            price.parent().append(
                "<span class='error'>Your price cannot be empty or invalid number.</span>");
            $(".error").fadeIn(500);
        } else {
            price.css("border-color", "green");
            price.parent().find(".error").remove();
        }

        if (validated) {
            msg = "Your information:\n";
            msg += "customer ID: " + customerID.val() + "\n";
            msg += "car ID: " + carID.val() + "\n";
            msg += "Date of Start: " + dateStart.val() + "\n";
            msg += "Date of End: " + dateEnd.val() + "\n";

            msg += "Price: " + price.val() + "\n";




            var yess = confirm(msg);
            if (yess) {
                /*    parent.$.colorbox.close();
                 */
                return true;
                /*   closeWin();*/

            } else
                return false;
        }
        return false;
    })

    $("#EditReservation").on('reset', function(e) {
        /*location.reload();*/
        /*                $(this).find(".error").remove();
         */
        dateStart = $("input[name='dateStart']"),
            dateEnd = $("input[name='dateEnd']"),
            price = $("input[name='price']");


        dateStart.css("border-color", "inherit");
        dateStart.parent().find(".error").remove();

        dateEnd.css("border-color", "inherit");
        dateEnd.parent().find(".error").remove();

        price.css("border-color", "inherit");
        price.parent().find(".error").remove();





    });
});
</script>


</html>