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
<?php unset($_SESSION['error']) ;
  } 
 ?>

<body data-spy="scroll" data-target=".navbar" data-offset="100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top nav-border-gray" style="background-color: white;">

        <!-- Container #1 -->
        <div class="container">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="?controller=index&action=home">
                <img src="view/customers/assets/images/icon.png" alt="Car Rental Logo" style="width:50px;">
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="?controller=index&action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=car&action=carlisting">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=index&action=faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=index&action=contact">Contact</a>
                    </li>
                    <?php if (isset($_SESSION["logged"])){ ?>
                    <li <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="passwordChangedViewCustomer") {?>
                        class="active nav-item" <?php } ?>><a href="?controller=user&action=passwordChangedViewCustomer"
                            class=" nav-link">Change
                            Password</a></li>

                    <?php } ?>
                    <!-- <?php if ($user==null || empty($user) ) {?>
                    <li <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                        class="active nav-item" <?php } ?>>
                        <a class="nav-link" href="?controller=user&action=loginLogout">Login</a>
                    </li>

                    <?php } else {?>

                    <li <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                        class="active nav-item" <?php } ?>>
                        <a href="?controller=user&action=logout" class="nav-link">Logout</a></li>

                    <?php } ?> -->

                </ul>
                <br>
                <!-- Register / Login button -->
                <div class="ml-5">

                    <?php if ($user==null || empty($user) ) {?>
                    <a <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                        class="active" <?php } ?> href="?controller=user&action=loginLogout">
                        <button class=" btn btn-primary" role="button">Login / Register</button>
                    </a>
                    <?php } else {?>

                    <a <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                        class="active" <?php } ?> href="?controller=user&action=logout">
                        <button class=" btn btn-primary" role="button">Logout</button>

                    </a>
                    <?php } ?>

                </div>
                <!-- End Links -->
            </div>
        </div>
        <!-- End Nav -->
    </nav>