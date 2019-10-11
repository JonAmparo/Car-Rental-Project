<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid my-5">
    <div id="wrapper">
        <div id="ptype-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Car</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="AddCar" name="AddCar" action="?controller=car&action=addCar"
                                        method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" name="brand" id="brand" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" name="model" id="model" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" name="type" id="type" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Tank Capacity</label>
                                            <input type="number" name="tankCapacity" id="tankCapacity"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Gas Consumption</label>
                                            <input type="number" name="gasConsumption" id="gasConsumption"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="color" id="color" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Number of Passenger</label>
                                            <input type="number" name="numberofPassenger" id="numberofPassenger"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Rent Price</label>
                                            <input type="number" min=0 name="rentPrice" id="rentPrice"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Image of Car</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="description"
                                                id="description"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="number" min=0 max=1 name="status" id="status"
                                                class="form-control">
                                        </div>

                                        <button type="submit" name="addCar" class="btn btn-primary">Submit
                                            Button</button>
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
    $("#AddCar").submit(function(e) {
        var validated = true,
            model = $("input[name='model']"),
            brand = $("input[name='brand']"),
            type = $("input[name='type']"),
            tankCapacity = $("input[name='tankCapacity']"),
            gasConsumption = $("input[name='gasConsumption']"),
            color = $("input[name='color']"),
            numberofPassenger = $("input[name='numberofPassenger']"),
            status = $("input[name='status']"),
            rentPrice = $("input[name='rentPrice']");
        $(this).find(".error").remove();


        if (brand.val().length < 1) {
            validated = false;
            brand.css("border-color", "red");
            brand.parent().append(
                "<span class='error'>Your brand cannot be less than 1 character</span>");
            $(".error").fadeIn(500);
        } else {
            brand.css("border-color", "green");
            brand.parent().find(".error").remove();
        }


        if (model.val().length < 1) {
            validated = false;
            model.css("border-color", "red");
            model.parent().append(
                "<span class='error'>Your model cannot be less than 1 character</span>");
            $(".error").fadeIn(500);
        } else {
            model.css("border-color", "green");
            model.parent().find(".error").remove();
        }

        if (type.val().length < 1) {
            validated = false;
            type.css("border-color", "red");
            type.parent().append(
                "<span class='error'>Your type cannot be less than 1 character</span>");
            $(".error").fadeIn(500);
        } else {
            type.css("border-color", "green");
            type.parent().find(".error").remove();
        }


        if (tankCapacity.val() < 1) {
            validated = false;
            tankCapacity.css("border-color", "red");
            tankCapacity.parent().append(
                "<span class='error'> Your tankCapacity must be more than 1</span>");
            $(".error").fadeIn(500);
        } else {
            tankCapacity.css("border-color", "green");
            tankCapacity.parent().find(".error").remove();
        }

        if (gasConsumption.val() < 1) {
            validated = false;
            gasConsumption.css("border-color", "red");
            gasConsumption.parent().append(
                "<span class='error'>Your gasConsumption cannot be less than 1 </span>");
            $(".error").fadeIn(500);
        } else {
            gasConsumption.css("border-color", "green");
            gasConsumption.parent().find(".error").remove();
        }
        if (color.val().length < 1) {
            validated = false;
            color.css("border-color", "red");
            color.parent().append("<span class='error'>Your color cannot be empty</span>");
            $(".error").fadeIn(500);
        } else {
            color.css("border-color", "green");
            color.parent().find(".error").remove();
        }


        if (numberofPassenger.val() < 2) {
            validated = false;
            numberofPassenger.css("border-color", "red");
            numberofPassenger.parent().append(
                "<span class='error'>Your number of Passenger cannot be less than 2 </span>");
            $(".error").fadeIn(500);
        } else {
            numberofPassenger.css("border-color", "green");
            numberofPassenger.parent().find(".error").remove();
        }


        if (rentPrice.val().length < 1) {
            validated = false;
            rentPrice.css("border-color", "red");
            rentPrice.parent().append(
                "<span class='error'>Your rentPrice cannot be less than 1 </span>");
            $(".error").fadeIn(500);
        } else {
            rentPrice.css("border-color", "green");
            rentPrice.parent().find(".error").remove();
        }

        if (document.getElementById("image").files.length == 0) {
            validated = false;
            $('#image').css("border-color", "red");
            $('#image').parent().append("<span class='error'>File is not chosen.</span>");
            $(".error").fadeIn(500);
        } else {
            image.css("border-color", "green");
            image.parent().find(".error").remove();
        }

        if (status.val().length < 1) {
            validated = false;
            status.css("border-color", "red");
            status.parent().append("<span class='error'>Your status cannot be less than 1 </span>");
            $(".error").fadeIn(500);
        } else {
            status.css("border-color", "green");
            status.parent().find(".error").remove();
        }

        if (validated) {
            msg = "Your information:\n";
            msg += "Brand: " + brand.val() + "\n";
            msg += "model: " + model.val() + "\n";
            msg += "tankCapacity: " + tankCapacity.val() + "\n";
            msg += "gasConsumption: " + gasConsumption.val() + "\n";
            msg += "Color: " + color.val() + "\n";
            msg += "Number of passenger(s): " + numberofPassenger.val() + "\n";
            msg += "Rent Price: " + rentPrice.val() + "\n";

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

    $("#AddCar").on('reset', function(e) {
        location.reload();
        $(this).find(".error").remove();

        model = $("input[name='model']"),
            brand = $("input[name='brand']"),
            type = $("input[name='type']"),
            tankCapacity = $("input[name='tankCapacity']"),
            gasConsumption = $("input[name='gasConsumption']"),
            color = $("input[name='color']"),
            numberofPassenger = $("input[name='numberofPassenger']"),
            status = $("input[name='status']"),
            rentPrice = $("input[name='rentPrice']");

        brand.css("border-color", "inherit");
        brand.parent().find(".error").remove();

        model.css("border-color", "inherit");
        model.parent().find(".error").remove();

        type.css("border-color", "inherit");
        type.parent().find(".error").remove();

        tankCapacity.css("border-color", "inherit");
        tankCapacity.parent().find(".error").remove();

        gasConsumption.css("border-color", "inherit");
        gasConsumption.parent().find(".error").remove();

        color.css("border-color", "inherit");
        color.parent().find(".error").remove();

        numberofPassenger.css("border-color", "inherit");
        numberofPassenger.parent().find(".error").remove();

        rentPrice.css("border-color", "inherit");
        rentPrice.parent().find(".error").remove();

        status.css("border-color", "inherit");
        status.parent().find(".error").remove();
    });
});
</script>

</html>