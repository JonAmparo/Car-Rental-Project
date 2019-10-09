<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee - Add Employee</title>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,600i,700" rel="stylesheet">
    <!-- including boostrap from cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
    integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
    crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="icon" type="image/png" href="../assets/images/icon.png">

</head>

<?php include('header.php'); ?>

<body class="container-fluid">

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New  Employee</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="addEmployee" name ="addEmployee" action ="../../index.php/?controller=user&action=addEmployee" method="post">

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type= "text" name="firstname" id="firstname" class="form-control" placeholder="First name">
                                        </div>

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type= "text" name="lastname" id="lastname" class="form-control" placeholder="Last name">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type= "text" name="username" id="username" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type= "password" name="password" id="password" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type= "password" name="confirmpassword" id="confirmpassword" class="form-control" >
                                        </div>  
                                        
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type= "email" name="email" id="email" class="form-control" placeholder="email@something.com">
                                        </div>

                                        <button type="submit" name="addEmployee" class="btn btn-primary">Submit Button</button>
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
</body>

<script>

    $(function(){
        $("#addEmployee").submit(function(e){
            var validated = true,
            firstname = $("input[name='firstname']"),
            lastname = $("input[name='lastname']"),
            username = $("input[name='username']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']"),
            email = $("input[name='email']");


            $(this).find(".error").remove();


            if(firstname.val().length < 1){
                validated = false;
                firstname.css("border-color", "red");
                firstname.parent().append("<span class='error'>Your firstname cannot be less than 1 character</span>");
                $(".error").fadeIn(500);
            }else{
                firstname.css("border-color", "green");
                firstname.parent().find(".error").remove();
            }

            
            if(lastname.val().length < 1){
                validated = false;
                lastname.css("border-color", "red");
                lastname.parent().append("<span class='error'>Your lastname cannot be less than 1 character</span>");
                $(".error").fadeIn(500);
            }else{
                lastname.css("border-color", "green");
                lastname.parent().find(".error").remove();
            }

            if(username.val().length < 1){
                validated = false;
                username.css("border-color", "red");
                username.parent().append("<span class='error'>Your username cannot be less than 1 character</span>");
                $(".error").fadeIn(500);
            }else{
                username.css("border-color", "green");
                username.parent().find(".error").remove();
            }


            if(password.val().length <5 ){
                validated = false;
                password.css("border-color", "red");
                password.parent().append("<span class='error'> Your password must be more than 5 characters</span>");
                $(".error").fadeIn(500);
            }else{
                password.css("border-color", "green");
                password.parent().find(".error").remove();
            }

            if((confirmpassword).val().length < 5 || password.val()!= confirmpassword.val()){
                validated = false;
                confirmpassword.css("border-color", "red");
                confirmpassword.parent().append("<span class='error'>Your confirmpassword cannot be less than 1 </span>");
                $(".error").fadeIn(500);
            }else{
                confirmpassword.css("border-color", "green");
                confirmpassword.parent().find(".error").remove();
            }

            if( email.val().length < 1){
                validated = false;
                email.css("border-email", "red");
                email.parent().append("<span class='error'>Your email cannot be empty</span>");
                $(".error").fadeIn(500);
            }else{
                email.css("border-email", "green");
                email.parent().find(".error").remove();
            }

            if(validated){
                msg = "Your information:\n";
                msg += "Firstname: " + firstname.val() + "\n";
                msg += "Lastname: " + lastname.val() + "\n";
                msg += "username: " + username.val() + "\n";
                msg += "Email: " + email.val() + "\n";

                var yess= confirm(msg);
                if (yess){
                   return true;


            }
            else
               return false;
       }
       return false;
   })

        $("#addEmployee").on('reset', function(e){

            lastname = $("input[name='lastname']"),
            firstname = $("input[name='firstname']"),
            username = $("input[name='username']"),
            password = $("input[name='password']"),
            confirmpassword = $("input[name='confirmpassword']"),
            email = $("input[name='email']");

            firstname.css("border-color", "inherit");
            firstname.parent().find(".error").remove();

            lastname.css("border-color", "inherit");
            lastname.parent().find(".error").remove();

            username.css("border-color", "inherit");
            username.parent().find(".error").remove();

            password.css("border-color", "inherit");
            password.parent().find(".error").remove();


            confirmpassword.css("border-color", "inherit");
            confirmpassword.parent().find(".error").remove();

            email.css("border-color", "inherit");
            email.parent().find(".error").remove();


        });
    });
</script>

</html>
