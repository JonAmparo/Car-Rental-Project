<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <br>
    <br>
    <h1 class="text-center navy-blue">
        <span class="text-black">PASSWORD </span>RECOVERY
    </h1>
    <hr>
    <!-- End-->

    <!-- Default form login -->
    <form>
        <p class="h4 text-center mb-4"></p>

        <!-- Default input email -->
        <label for="defaultFormLoginEmailEx" class="grey-text">Your e-mail</label>
        <input type="email" id="defaultFormLoginEmailEx" class="form-control" style="width: 75%;">

        <br>

        <!-- Default input password -->
        <label for="defaultFormLoginPhoneNumberEx" class="grey-text">Your phone number</label>
        <input type="phone" id="defaultFormLoginPhoneNumberEx" class="form-control" style="width: 75%;">

        <br>

        <!-- Default input email -->
        <label for="defaultFormNewPasswordEx" class="grey-text">New password</label>
        <input type="newPassword" id="defaultFormNewPasswordEx" class="form-control" style="width: 75%;">

        <br>

        <!-- Default input password -->
        <label for="defaultFormNewConfirmPasswordEx" class="grey-text">Confirm password</label>
        <input type="confirmPassword" id="defaultFormNewConfirmPasswordEx" class="form-control" style="width: 75%;">

        <div class="text-center mt-4">
            <button class="btn btn-indigo" type="submit" style="margin-bottom: 50px;">Reset my password</button>
        </div>

        <p class="text-center">
            Already have an account?
            <a href="login.php">
                Login here!
            </a>
        </p>
        <br>
    </form>
    <!-- Default form login -->


    <?php 

	include('includes/footer.php');

	?>