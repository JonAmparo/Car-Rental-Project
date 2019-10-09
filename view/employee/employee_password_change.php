<?php include('includes/head.php'); ?>
<?php include('includes/headerEdit.php'); ?>

<div class="container-fluid my-5">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Change Password</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php/?controller=user&action=employee_passw_change"
                                        method="POST" id="passwordChange_Employee" name="passwordChange_Employee">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="oldPassword" id="oldPassword"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirmpassword" id="confirmpassword"
                                                class="form-control">
                                        </div>

                                        <button type="submit" name="PasswordChangeEmployee"
                                            class="btn btn-primary">Save</button>
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
    $("#passwordChange_Employee").submit(function(e) {
        var validated = true,

            oldPassword = $("input[name='oldPassword']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']");


        $(this).find(".error").remove();

        if (oldPassword.val().length < 1) {
            validated = false;
            oldPassword.css("border-color", "red");
            oldPassword.parent().append(
                "<span class='error'>Your oldPassword cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            oldPassword.css("border-color", "green");
            oldPassword.parent().find(".error").remove();
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

        if (validated) {
            msg = "Are you sure to change current password?\n";

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

    $("#passwordChange_Employee").on('reset', function(e) {

        oldPassword = $("input[name='oldPassword']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']");




        oldPassword.css("border-color", "inherit");
        oldPassword.parent().find(".error").remove();

        password.css("border-color", "inherit");
        password.parent().find(".error").remove();

        confirmpassword.css("border-color", "inherit");
        confirmpassword.parent().find(".error").remove();

    });
});
</script>

</html>