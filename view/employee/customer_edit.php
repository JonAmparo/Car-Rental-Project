<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Customer</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="EditCustomer" name="EditCustomer"
                                        action="?controller=user&action=editCustomer" method="POST"
                                        enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input type="text" name="ID" id="ID"
                                                value="<?=$customerEdit->getCustomerID() ?>" class="form-control"
                                                readonly="readonly">
                                        </div>


                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="fullName" id="fullName"
                                                value="<?=$customerEdit->getFullName() ?>" class="form-control"
                                                placeholder="Full name">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" id="username"
                                                value="<?=$customerEdit->getUserName() ?>" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dateofBirth" id="dateofBirth"
                                                value="<?=$customerEdit->getDateofBirth() ?>" max="1999-06-18"
                                                min="1949-06-18" class="form-control" placeholder="mm/dd/yyyy">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" id="phone"
                                                value="<?=$customerEdit->getPhone() ?>" class="form-control"
                                                placeholder="###-###-####">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="customerEmail"
                                                value="<?=$customerEdit->getCustomerEmail() ?>" id="customerEmail"
                                                class="form-control" placeholder="email@something.com">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" id="address"
                                                value="<?=$customerEdit->getAddress() ?>" class="form-control"
                                                placeholder="123 Something Street">
                                        </div>

                                        <div class="form-group">
                                            <label>Driver Licence</label>
                                            <input type="number" name="customerDriverLicence"
                                                value="<?=$customerEdit->getCustomerDriverLicence() ?>"
                                                id="customerDriverLicence" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Credit Card Number</label>
                                            <input type="number" name="creditCard"
                                                value="<?=$customerEdit->getCreditCard() ?>" id="creditCard"
                                                class="form-control">
                                        </div>

                                        <button type="submit" name="editCustomer" class="btn btn-primary">Submit
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
    $("#EditCustomer").submit(function(e) {
        var validated = true,
            fullName = $("input[name='fullName']"),
            username = $("input[name='username']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']"),
            dateofBirth = $("input[name='dateofBirth']"),
            phone = $("input[name='phone']"),
            customerEmail = $("input[name='customerEmail']"),
            address = $("input[name='address']"),
            customerDriverLicence = $("input[name='customerDriverLicence']"),
            creditCard = $("input[name='creditCard']");

        $(this).find(".error").remove();

        if (fullName.val().length < 1) {
            validated = false;
            fullName.css("border-color", "red");
            fullName.parent().append(
                "<span class='error'>Your name cannot be less than 1 character</span>");
            $(".error").fadeIn(500);
        } else {
            fullName.css("border-color", "green");
            fullName.parent().find(".error").remove();
        }

        if (username.val().length < 5) {
            validated = false;
            username.css("border-color", "red");
            username.parent().append(
                "<span class='error'>Your username cannot be less than 5 characters.</span>");
            $(".error").fadeIn(500);
        } else {
            username.css("border-color", "green");
            username.parent().find(".error").remove();
        }

        if (password.val().length < 5) {
            validated = false;
            password.css("border-color", "red");
            password.parent().append(
                "<span class='error'> Your password cannot be less than 5 characters.</span>");
            $(".error").fadeIn(500);
        } else {
            password.css("border-color", "green");
            password.parent().find(".error").remove();
        }

        if (confirmpassword.val().length < 5 || (confirmpassword.val() != password.val())) {
            validated = false;
            confirmpassword.css("border-color", "red");
            confirmpassword.parent().append(
                "<span class='error'>Your confirmpassword doesn't match. </span>");
            $(".error").fadeIn(500);
        } else {
            confirmpassword.css("border-color", "green");
            confirmpassword.parent().find(".error").remove();
        }
        if (dateofBirth.val().length < 1) {
            validated = false;
            dateofBirth.css("border-color", "red");
            dateofBirth.parent().append(
                "<span class='error'>Your date of birth cannot be empty or an invalid date.</span>"
            );
            $(".error").fadeIn(500);
        } else {
            dateofBirth.css("border-color", "green");
            dateofBirth.parent().find(".error").remove();
        }

        if (phone.val().length < 4) {
            validated = false;
            phone.css("border-color", "red");
            phone.parent().append("<span class='error'> Please enter a valid phone no. </span>");
            $(".error").fadeIn(500);
        } else {
            phone.css("border-color", "green");
            phone.parent().find(".error").remove();
        }


        if (address.val().length < 1) {
            validated = false;
            address.css("border-color", "red");
            address.parent().append("<span class='error'>Your address cannot be empty. </span>");
            $(".error").fadeIn(500);
        } else {
            address.css("border-color", "green");
            address.parent().find(".error").remove();
        }
        if (customerDriverLicence.val().length < 4) {
            validated = false;
            customerDriverLicence.css("border-color", "red");
            customerDriverLicence.parent().append(
                "<span class='error'>Please give a valid driver license .</span>");
            $(".error").fadeIn(500);
        } else {
            customerDriverLicence.css("border-color", "green");
            customerDriverLicence.parent().find(".error").remove();
        }

        if (creditCard.val().length < 4) {
            validated = false;
            creditCard.css("border-color", "red");
            creditCard.parent().append(
                "<span class='error'>Your creditCard cannot be empty or invalid number.</span>");
            $(".error").fadeIn(500);
        } else {
            creditCard.css("border-color", "green");
            creditCard.parent().find(".error").remove();
        }

        if (validated) {
            msg = "Your information:\n";
            msg += "Name: " + fullName.val() + "\n";
            msg += "Password: " + password.val() + "\n";
            msg += "Date of Birth: " + dateofBirth.val() + "\n";
            msg += "Number of passenger(s): " + phone.val() + "\n";
            msg += "Address: " + address.val() + "\n";
            msg += "Phone: " + phone.val() + "\n";
            msg += "CustomerDriverLicencess: " + customerDriverLicence.val() + "\n";

            var yess = confirm(msg);
            if (yess) {
                return true;
            } else
                return false;
        }
        return false;
    })

    $("#EditCustomer").on('reset', function(e) {
        location.reload();
        $(this).find(".error").remove();

        fullName = $("input[name='fullName']"),
            username = $("input[name='username']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']"),
            dateofBirth = $("input[name='dateofBirth']"),
            phone = $("input[name='phone']"),
            customerEmail = $("input[name='customerEmail']"),
            address = $("input[name='address']"),
            customerDriverLicence = $("input[name='customerDriverLicence']"),
            creditCard = $("input[name='creditCard']");

        fullName.css("border-color", "inherit");
        fullName.parent().find(".error").remove();

        username.css("border-color", "inherit");
        username.parent().find(".error").remove();

        password.css("border-color", "inherit");
        password.parent().find(".error").remove();

        confirmpassword.css("border-color", "inherit");
        confirmpassword.parent().find(".error").remove();

        dateofBirth.css("border-color", "inherit");
        dateofBirth.parent().find(".error").remove();

        phone.css("border-color", "inherit");
        phone.parent().find(".error").remove();

        address.css("border-color", "inherit");
        address.parent().find(".error").remove();

        customerDriverLicence.css("border-color", "inherit");
        customerDriverLicence.parent().find(".error").remove();

        creditCard.css("border-color", "inherit");
        creditCard.parent().find(".error").remove();

    });
});
</script>
</html>