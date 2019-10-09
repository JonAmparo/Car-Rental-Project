<?php 
include('includes/header.php');
?> 
<?php 
if(!isset($_SESSION)){
    session_start();
}

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

    <body id="home" class="wide">

        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">
                        <div class="row">
                            <div class="mt-4 col-md-6">
                                <h3 class="block-title text-center"><span>Change Password</span></h3>
                                <form action="../../index.php/?controller=user&action=customer_passw_change" class="form-login" method="post" name="formuserChangePassword" id="formuserChangePassword">


                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" name="oldPassword" id="oldPassword" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
                                    </div>

                                    <button type="submit" name="PasswordChangeCustomer" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-success">Reset Button</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->



            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>


    </body>

    <script>

        $(function () {
            $("#formuserChangePassword").submit(function (e) {
                var validated = true,

                oldPassword = $("input[name='oldPassword']"),
                password = $("input[name='password']"),
                confirmpassword = $("input[name='confirmpassword']");


                $(this).find(".error").remove();





                if (oldPassword.val().length < 1) {
                    validated = false;
                    oldPassword.css("border-color", "red");
                    oldPassword.parent().append("<span class='error'>Your oldPassword cannot be empty.</span>");
                    $(".error").fadeIn(500);
                } else {
                    oldPassword.css("border-color", "green");
                    oldPassword.parent().find(".error").remove();
                }


                if (password.val().length < 5) {
                    validated = false;
                    password.css("border-color", "red");
                    password.parent().append("<span class='error'> Your password cannot be less than characters.</span>");
                    $(".error").fadeIn(500);
                } else {
                    password.css("border-color", "green");
                    password.parent().find(".error").remove();
                }

                if (confirmpassword.val().length < 5 || (confirmpassword.val() != password.val())) {
                    validated = false;
                    confirmpassword.css("border-color", "red");
                    confirmpassword.parent().append("<span class='error'>Your confirmpassword doesn't match. </span>");
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
                    */    return true;
                    /*   closeWin();*/

                }
                else
                    return false;
            }
            return false;
        })

            $("#formuserChangePassword").on('reset', function (e) {


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