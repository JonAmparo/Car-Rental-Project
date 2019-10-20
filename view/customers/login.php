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

<div class="container pt-5">
    <div class="row justify-content-center">

    </div>
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <h1 class="text-center navy-blue">
                <span class="text-black">SIGN</span>
                IN
            </h1>
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
            <p class="py-3">
                Don't have an account?
                <a href="?controller=user&action=createAccountCustomerView" name="createCustomerForm"
                    value="Create Account">
                    Sign up here!
                </a>
                /
                <a href="#">
                    Forgot password?
                </a>
            </p>
            <p class="">
                <!-- <a href="view/customers/forgotPassword.php"> -->

            </p>
        </div>
        <div class="col-md-6">
            <h2 class="text-center ">User Accounts</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>admin</td>
                            <td>admin</td>
                            <td>Administrator</td>
                        </tr>
                        <tr>
                            <td>employee</td>
                            <td>joejoe</td>
                            <td>Employee</td>
                        </tr>
                        <tr>
                            <td>custom</td>
                            <td>custom</td>
                            <td>Customer</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center my-3">
        <div class="col-md-6">

        </div>

    </div>
</div>

<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-danger text-center">Important! To sign...</h1>
                <h4 class="text-danger text-center">If the passwords above aren't work, please follow the instructions below</h4>
                <ol class="lead">
                    <li>
                        Copy a password below
                    </li>
                    <li>
                        Decrypt it with <a target="_blank"
                            href="http://www.md5decrypt.org/">http://www.md5decrypt.org/</a>
                    </li>
                    <li>
                        Copy the result
                    </li>
                    <li>
                        Paste the result into the password field.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center ">Employee Accounts</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employees as $key => $employee):
                            $e = new Employee($employee);?>
                            <tr>
                                <td><?= $e->getUserName() ?></td>
                                <td><?= $e->getPassword() ?></td>
                                <td><?= $e->getLevel() ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center ">Customer Accounts</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($customers as $key => $customer):
                                                        $c = new Customer($customer);
                                                        ?>
                            <tr>
                                <td><?= $c->getUserName() ?></td>
                                <td><?= $e->getPassword() ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

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