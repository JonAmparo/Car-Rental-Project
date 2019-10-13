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
alert("<?php echo  ($_SESSION['error'] )?>");
</script>

<?php unset($_SESSION['error']) ;} ?>

<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <h1 class="text-center navy-blue">
            <span class="text-black">SIGN</span>
            IN
        </h1>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <form action="?controller=user&action=login" class="form-login" method="post" name="userLogin"
                id="userLogin">

                <?php if ($user==null || empty($user) ) {?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"><input class="form-control" name="username" id="username" type="text"
                                placeholder="Username"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><input class="form-control" name="password" id="password"
                                type="password" placeholder="Your password"></div>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" name="login" id="login" class="btn btn-primary btn-block" value="Login" />
                    </div>
                </div>
                <?php } 
				else
					{?>
                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="text-center">
                            <input type="submit" name="login" id="logout" class="btn btn-primary" value="Logout" />
                        </a>
                    </div>
                </div>
                <?php } ?>

            </form>
        </div>
    </div>
    <div class="row justify-content-center text-center my-3">
        <div class="col-md-6">
            <p class="">
                Don't have an account?
                <a href="?controller=user&action=createAccountCustomerView" name="createCustomerForm"
                    value="Create Account">
                    Sign up here!
                </a>
            </p>
            <p class="">
                <!-- <a href="view/customers/forgotPassword.php"> -->
                <a href="#">
                    Forgot password?
                </a>
            </p>
        </div>
    </div>
</div>

<script>
$(function() {
    $("#userLogin").submit(function(e) {
        var validated = true,
            password = $("input[name='password']"),
            username = $("input[name='username']");
        $(this).find(".error").remove();

        if (password.val().length < 1) {
            validated = false;
            password.css("border-color", "red");
            password.parent().append(
                "<span class='error'> Your password cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            password.css("border-color", "green");
            password.parent().find(".error").remove();
        }

        if (username.val().length < 1) {
            validated = false;
            username.css("border-color", "red");
            username.parent().append(
                "<span class='error'>Your username cannot be empty.</span>");
            $(".error").fadeIn(500);
        } else {
            username.css("border-color", "green");
            username.parent().find(".error").remove();
        }

        if (validated === true) {
            return true;
        } else
            return false;
        return false;
    })
});
</script>

</body>

</html>