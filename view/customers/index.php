<?php include('includes/head2.php');?>
<?php include('includes/header2.php'); 
// var_dump($user); 
 ?>

<?php $cars=$this->db->display_All_Cars(); ?>

<section class="sliding-wrapper">
    <div class="sliding-hero">
        <div class="hero-container">
            <div class="hero-cta row align-items-center h-100">
                <h1 class="hero-title text-center w-100">ELEVATE YOUR LIFESTYLE</h1>
                <h2 class="hero-small text-center w-100">The Premier Exotic Car Rental Service<br /> In Montréal, Québec
                </h2>
                <button class="hero-btn">
                    View Fleet
                </button>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center pb-6">
            <h2>First Class Exotic Car Rental In Montréal.</h2>
            <p>We offer exotic car rental & limousine services in our range of high-end vehicles</p>
        </div>

        <?php include('includes/cars.php');?>
    </div>
</section>


<section class="video-cta">
    <video playsinline autoplay muted loop poster="view/customers/assets/videos/video.mp4" id="bgvid">
        <source src="view/customers/assets/videos/video.webm" type="video/webm">
        <source src="view/customers/assets/videos/video.mp4" type="video/mp4">
        Your browser does not support HTML5 video.

    </video>
    <div class="thing text-center" id="polina">
        <h1>Our Fleet, Your Fleet</h1>
        <p>We know the difference is in the details and that’s why our exotic car rental services, in the tourism
            and business industry, stand out for their quality and good taste, to offer you an unique experience</p>
        <h3>Call Now <a href="tel:#">(555) 555-5555</a></h3>
    </div>

</section>


<?php include('includes/footer2.php'); ?>