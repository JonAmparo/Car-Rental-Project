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

<body>
    <header>
        <div class="contact-bar">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="top-contact-info">
                        <div class="top-contact-number">
                            <a href="tel:(555) 555-5555">
                                <i class="fas fa-phone sticky-icons"></i>
                                (555) 555-5555
                            </a>
                        </div>
                        <div class="top-contact-hours">
                            <i class="fas fa-clock sticky-icons"></i>
                            Mon-Sun 9 am - 8 pm
                        </div>
                    </div>
                    <ul class="top-social-media">
                        <a class="top-social-link" href="#facebook">
                            <li class="top-icon-social">
                                <i class="fab fa-facebook-square facebook"></i>
                            </li>
                        </a>
                        <a class="top-social-link" href="#instagram">
                            <li class="top-icon-social">
                                <i class="fab fa-instagram instagram"></i>
                            </li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
        <nav class="nav-bar">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <a class="logo" href="?controller=index&action=home">Exotic Rentals</a>
                    <ul class="nav-links">
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=index&action=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=car&action=carlisting">Rentals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=index&action=faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controller=index&action=contact">Contact</a>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#">Login / Register</a></li> -->

                        <!-- Login / Logout -->
                        <?php if ($user==null || empty($user) ) {?>
                        <li class="nav-item"
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                            class="active" <?php } ?> href="?controller=user&action=loginLogout">
                            <a class="nav-link" href="?controller=user&action=loginLogout">Login / Register</a>
                        </li>
                        <?php } else {?>

                        <li class="nav-item"
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                            class="active" <?php } ?>>
                            <a class="nav-link" href="?controller=user&action=logout">Logout</a>
                        </li>
                        <?php } ?>


                        <!-- Password Change -->
                        <?php if (isset($_SESSION["logged"])){ ?>
                        <li class="nav-item"
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="passwordChangedViewCustomer") {?>
                            class="active nav-item" <?php } ?>><a
                                href="?controller=user&action=passwordChangedViewCustomer" class=" nav-link">Change
                                Password</a></li>

                        <?php } ?>
                        <!-- <?php if ($user==null || empty($user) ) {?>
                        <li class="nav-item" <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                            class="active nav-item" <?php } ?>>
                            <a class="nav-link" href="?controller=user&action=loginLogout">Login</a>
                        </li>
    
                        <?php } else {?>
    
                        <li class="nav-item" <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                            class="active nav-item" <?php } ?>>
                            <a href="?controller=user&action=logout" class="nav-link">Logout</a></li>
    
                        <?php } ?> -->
                        <?php if (isset($_SESSION["logged"])){ ?>
                        <li class="nav-item"
                            <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="passwordChangedViewCustomer") {?>
                            class="active nav-item" <?php } ?>><a
                                href="?controller=user&action=passwordChangedViewCustomer" class=" nav-link">Change
                                Password</a></li>

                        <?php } ?>
                        <!-- <?php if ($user==null || empty($user) ) {?>
                        <li class="nav-item" <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="loginLogout") {?>
                            class="active nav-item" <?php } ?>>
                            <a class="nav-link" href="?controller=user&action=loginLogout">Login</a>
                        </li>
    
                        <?php } else {?>
    
                        <li class="nav-item" <?php if (isset($_GET["controller"]) && $_GET["controller"]=="user" &&  $_GET["action"]=="logout") {?>
                            class="active nav-item" <?php } ?>>
                            <a href="?controller=user&action=logout" class="nav-link">Logout</a></li>
    
                        <?php } ?> -->
                    </ul>
                </div>
            </div>
            </div>

    </header>