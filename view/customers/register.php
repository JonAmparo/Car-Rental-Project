<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>


<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h1>Register</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="?controller=user&action=addCustomerByCustomer" method="POST"
                                id="form_customer" name="form_customer ">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="firstname" id="firstname" class="form-control"
                                                placeholder="First name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lastname" id="lastname" class="form-control"
                                                placeholder="Last name">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirmpassword" id="confirmpassword"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dateofBirth" id="dateofBirth" max="1999-10-31"
                                                min="1930-06-18" class="form-control" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="###-###-####">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="customerEmail" id="customerEmail"
                                                class="form-control" placeholder="email@something.com">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" id="address" class="form-control"
                                                placeholder="123 address">
                                        </div>

                                        <div class="form-group">
                                            <label>Driver Licence</label>
                                            <input type="number" name="customerDriverLicence" id="customerDriverLicence"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Credit Card Number</label>
                                            <input type="number" name="creditCard" id="creditCard" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <button type="submit" name="createCustomer" class="btn btn-primary">Create
                                        account</button>
                                    <button type="reset" class="btn btn-danger">Reset fields</button>
                                </div>

                            </form>
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
    $("#form_customer").submit(function(e) {
        var validated = true,
            firstname = $("input[name='firstname']"),
            lastname = $("input[name='lastname']"),
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

        if (lastname.val().length < 1) {
            validated = false;
            lastname.css("border-color", "red");
            lastname.parent().append(
                "<span class='error'>Your lastname cannot be less than 1 character</span>");
            $(".error").fadeIn(500);
        } else {
            lastname.css("border-color", "green");
            lastname.parent().find(".error").remove();
        }

        if (firstname.val().length < 1) {
            validated = false;
            firstname.css("border-color", "red");
            firstname.parent().append(
                "<span class='error'>Your firstname cannot be less than 1 character</span>");
            $(".error").fadeIn(500);
        } else {
            firstname.css("border-color", "green");
            firstname.parent().find(".error").remove();
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
                "<span class='error'> Your password cannot be less than characters.</span>");
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

        if (customerEmail.val().length < 4) {
            validated = false;
            customerEmail.css("border-color", "red");
            customerEmail.parent().append(
                "<span class='error'> Please enter a valid email.</span>");
            $(".error").fadeIn(500);
        } else {
            customerEmail.css("border-color", "green");
            customerEmail.parent().find(".error").remove();
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
                "<span class='error'>Your credit card cannot be empty or invalid number.</span>");
            $(".error").fadeIn(500);
        } else {
            creditCard.css("border-color", "green");
            creditCard.parent().find(".error").remove();
        }

        if (validated) {
            msg = "Your information:\n";
            msg += "Lastname: " + lastname.val() + "\n";
            msg += "Firstname: " + firstname.val() + "\n";
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

    $("#form_customer").on('reset', function(e) {
        firstname = $("input[name='firstname']"),
            lastname = $("input[name='lastname']"),
            username = $("input[name='username']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']"),
            dateofBirth = $("input[name='dateofBirth']"),
            phone = $("input[name='phone']"),
            customerEmail = $("input[name='customerEmail']"),
            address = $("input[name='address']"),
            customerDriverLicence = $("input[name='customerDriverLicence']"),
            creditCard = $("input[name='creditCard']");

        lastname.css("border-color", "inherit");
        lastname.parent().find(".error").remove();

        firstname.css("border-color", "inherit");
        firstname.parent().find(".error").remove();

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