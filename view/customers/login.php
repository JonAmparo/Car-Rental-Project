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
alert("<?php echo  ($_SESSION['error'] )?>");
</script>
<?php unset($_SESSION['error']) ;} 

	?>
<!-- Start  -->
<div class="container">
    <br>
    <br>
    <h1 class="text-center navy-blue">
        <span class="text-black">SIGN</span>
        IN
    </h1>
    <hr>
    <!-- End-->

    <!-- Default form login -->
    <div class="col-sm-6">
        <h3 class="block-title"><span>Login</span></h3>
        <form action="../../index.php/?controller=user&action=login" class="form-login" method="post" name="userLogin"
            id="userLogin">

            <?php if ($user==null || empty($user) ) {?>
            <div class="row">
                <div class="col-md-12 hello-text-wrap">
                    <span class="hello-text text-thin">Hello, welcome to your account</span>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><input class="form-control" name="username" id="username" type="text"
                            placeholder="User name"></div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><input class="form-control" name="password" id="password" type="password"
                            placeholder="Your password"></div>
                </div>

                <div class="col-md-6">
                    <input type="submit" name="login" id="login" class="btn btn-primary btn-block"
                        value="Login" />
                </div>
            </div>
            <?php } 

				else
					{?>

            <div class="row">

                <div class="col-md-6">
                    <input type="submit" name="login" id="logout" class="btn btn-theme btn-block btn-theme-dark"
                        value="Login" />
                </div>


            </div>

            <?php }
					?>

        </form>
    </div>
    <p class="text-center">
        Don't have an account?
        <a href="../../index.php/?controller=user&action=createAccountCustomerView" name="createCustomerForm"
            value="Create Account">
            Sign up here!
        </a>
    </p>
    <p class="text-center">
        <a href="forgotPassword.php">
            Forgot password?
        </a>
    </p>
    <br>
    </form>
    <!-- Default form login -->
    <!-- Footer / top -->
    <footer id="topFooter">
        <div class="container" id="topFooterLinks">
            <div class="mx-auto" style="width: auto;">
                <br>
                <p class="text-black">
                    <a class="mx-1 navy-blue" href="../../?controller=index&action=view">Home</a> |
                    <a class="mx-1 navy-blue" href="../../?controller=car&action=carlisting">Cars</a> |
                    <a class="mx-1 navy-blue" href="../../?controller=index&action=faq">FAQ</a> |
                    <a class="mx-1 navy-blue" href="../../?controller=index&action=feedback">Contact</a>
                </p>
            </div>
        </div>
        <!-- End of top Footer -->
    </footer>

    <!-- Bottom footer - Copyright and stuff -->
    <footer id="botFooter">
        <div class="container">
            <hr>
            <p>Copyright &copy; 2019 Stuff Jon Things</p>
            <hr style="width: 100px">
            <p>Website created by <a href="#">Jonathan Amparo</a></p>
            <hr>
        </div>
        <!-- End of bottom Footer -->
    </footer>

    <!-- Scripts -->
    <div>
        <!-- Bootstrap requires jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- bootstrap 4 requires popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>

        <!-- including boostrap from cdn -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <!-- Functions & Plugins -->
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

                if (validated) {
                    return true;

                } else
                    return false;

                return false;
            })

            $("#userLogin").on('reset', function(e) {


                username = $("input[name='username']"),
                    password = $("input[name='password']"),

                    username.css("border-color", "inherit");
                username.parent().find(".error").remove();

                password.css("border-color", "inherit");
                password.parent().find(".error").remove();



            });
        });
        </script>
    </div>

    </body>

    </html>