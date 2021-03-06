<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <div id="wrapper">
        <div id="ptype-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Returns</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="CarReturn" name="CarReturn"
                                        action="?controller=rental&action=returnCar" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Rental ID</label>
                                            <input type="text" class="form-control" name="RenatlID" id="RenatlID"
                                                value="<?=$rental->getRentalID()?>" readonly="readonly">
                                        </div>

                                        <div class="form-group">
                                            <label>Car ID</label>
                                            <input type="text" name="carID" id="carID" class="form-control"
                                                value="<?=$rental->getCarID()?>" readonly="readonly">
                                        </div>

                                        <div class="form-group">
                                            <label>Customer ID</label>
                                            <input type="text" name="customerID" id="customerID" class="form-control"
                                                value="<?=$rental->getCustomerID()?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label>Start date</label>
                                            <input type="text" name="dateStart" id="dateStart" readonly="readonly"
                                                class="form-control" value="<?=$rental->getDateStart()?>">
                                        </div>
                                        <div class="form-group">
                                            <label>End date</label>
                                            <input type="text" name="dateEnd" id="dateEnd" class="form-control"
                                                value="<?=$rental->getDateEnd()?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" name="price" id="price" class="form-control"
                                                value="<?=$rental->getPrice()?>">
                                        </div>
                                        <div class="form-group">
                                            <label>TOS Accepted</label>
                                            <input type="number" name="tosAccepted" id="tosAccepted"
                                                class="form-control" value="<?=$rental->getTosAccepted()?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Cancelled</label>
                                            <input type="text" name="cancelled" id="cancelled" class="form-control"
                                                value="<?=$rental->getCancelled()?>" readonly="readonly">
                                        </div>

                                        <div class="form-group">
                                            <label>inspected</label>
                                            <input type="text" name="inspected" id="inspected" class="form-control"
                                                value="<?=$rental->getInspected()?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <input type="text" name="notes" id="notes" class="form-control"
                                                value="<?=$rental->getNotes()?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Damage</label>
                                            <input type="checkbox" name="damage" id="damage">
                                        </div>

                                        <div class="form-group">
                                            <label>Gas Level</label>
                                            <input type="number" min=0 value=0 name="gasLevel" id="gasLevel"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Mileage</label>
                                            <input type="number" min=0 value=0 name="mileage" id="mileage"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Additional Charges</label>
                                            <input type="number" min=0 value=0 name="additionalcharge"
                                                id="additionalcharge" class="form-control">
                                        </div>


                                        <button type="submit" name="returnCar" class="btn btn-primary">Submit
                                            Return</button>
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
</div>
</body>

<script>
$(function() {
    $("#CarReturn").submit(function(e) {
        var validated = true,
            gasLevel = $("input[name='gasLevel']"),
            additionalcharge = $("input[name='additionalcharge']"),
            inspected = $("input[name='inspected']"),
            notes = $("input[name='notes']"),
            mileage = $("input[name='mileage']"),
            price = $("input[name='price']");

        $(this).find(".error").remove();

        if (gasLevel.val().length < 1) {
            validated = false;
            gasLevel.css("border-color", "red");
            gasLevel.parent().append("<span class='error'>Your gasLevel cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            gasLevel.css("border-color", "green");
            gasLevel.parent().find(".error").remove();
        }

        if (inspected.val().length < 1) {
            validated = false;
            inspected.css("border-color", "red");
            inspected.parent().append("<span class='error'>Your inspected cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            inspected.css("border-color", "green");
            inspected.parent().find(".error").remove();
        }

        if (notes.val().length < 1) {
            validated = false;
            notes.css("border-color", "red");
            notes.parent().append("<span class='error'>Your notes cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            notes.css("border-color", "green");
            notes.parent().find(".error").remove();
        }


        if (mileage.val().length < 1) {
            validated = false;
            mileage.css("border-color", "red");
            mileage.parent().append("<span class='error'>Your mileage cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            mileage.css("border-color", "green");
            mileage.parent().find(".error").remove();
        }

        if (additionalcharge.val().length < 1) {
            validated = false;
            additionalcharge.css("border-color", "red");
            additionalcharge.parent().append(
                "<span class='error'>Your additionalcharge cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            additionalcharge.css("border-color", "green");
            additionalcharge.parent().find(".error").remove();
        }

        if (price.val().length < 1) {
            validated = false;
            price.css("border-color", "red");
            price.parent().append("<span class='error'>Your price cannot be less than 1 </span>");
            $(".error").fadeIn(500);
        } else {
            price.css("border-color", "green");
            price.parent().find(".error").remove();
        }

        if (validated) {
            msg = "Your information:\n";
            msg += "Gas Level: " + gasLevel.val() + "\n";
            msg += "Additional Charge: " + additionalcharge.val() + "\n";
            msg += "Price: " + price.val() + "\n";

            var yess = confirm(msg);
            if (yess) {
                parent.$.colorbox.close();

                return true;
                closeWin();

            } else
                return false;
        }
        return false;
    })

    $("#CarReturn").on('reset', function(e) {

        gasLevel = $("input[name='gasLevel']"),
            additionalcharge = $("input[name='additionalcharge']"),
            price = $("input[name='price']");

        additionalcharge.css("border-color", "inherit");
        additionalcharge.parent().find(".error").remove();

        gasLevel.css("border-color", "inherit");
        gasLevel.parent().find(".error").remove();


        price.css("border-color", "inherit");
        price.parent().find(".error").remove();
    });
});
</script>
</html>