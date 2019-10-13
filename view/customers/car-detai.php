<?php 
$user="";
if (isset($_SESSION["logged"])){
    $user=$_SESSION["logged"];
    // var_dump($user);
}
?>

<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>


<div class="container py-3">
    <h1>Car Detail</h1>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="employeeID" id="employeeID"
                            value="<?=$carForDisplay->getCarID()?>" readonly="readonly">
                    </div>

                    <div class="form-group">
                        <img style="width: 250px; height: 250px;" src="<?=$carForDisplay->getImage()?>">
                    </div>

                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" name="brand" id="brand" class="form-control" readonly="readonly"
                            value="<?=$carForDisplay->getBrand()?>">
                    </div>

                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" id="model" class="form-control" readonly="readonly"
                            value="<?=$carForDisplay->getModel()?>">
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" id="type" class="form-control" readonly="readonly"
                            value="<?=$carForDisplay->getType()?>">
                    </div>

                    <div class="form-group">
                        <label>Tank Capacity</label>
                        <input type="number" name="tankCapacity" id="tankCapacity" readonly="readonly"
                            class="form-control" value="<?=$carForDisplay->getTankCapacity()?>">
                    </div>

                    <div class="form-group">
                        <label>Gas Consumption</label>
                        <input type="number" name="gasConsumption" id="gasConsumption" class="form-control"
                            value="<?=$carForDisplay->getGasConsumption()?>">
                    </div>

                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" name="color" id="color" class="form-control" readonly="readonly"
                            value="<?=$carForDisplay->getColor()?>">
                    </div>

                    <div class="form-group">
                        <label>Number of Passenger</label>
                        <input type="number" name="numberofPassenger" id="numberofPassenger" readonly="readonly"
                            class="form-control" value="<?=$carForDisplay->getNumberofPassenger()?>">
                    </div>

                    <div class="form-group">
                        <label>Rent Price</label>
                        <input type="number" min=0 name="rentPrice" id="rentPrice" readonly="readonly"
                            class="form-control" value="<?=$carForDisplay->getRentPrice()?>">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description" id="description" readonly="readonly"
                            value="<?=$carForDisplay->getDescription()?>"></textarea>
                    </div>
                    <?php if($carForDisplay->getStatus()==1){
                                                $availablity="Yes";
                                            } else $availablity="No";?>
                    <div class="form-group">
                        <label>Availability:&nbsp; <?=$availablity ?></label>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
<footer class="footer">
    <div class="footer-meta">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <p class="btn-row text-center">
                                <a href="#" class="btn btn-primary btn-icon-left facebook"><i
                                        class="fa fa-facebook"></i>FACEBOOK</a>
                                <a href="#" class="btn btn-primary btn-icon-left twitter"><i
                                        class="fa fa-twitter"></i>TWITTER</a>
                                <a href="#" class="btn btn-primary btn-icon-left pinterest"><i
                                        class="fa fa-pinterest"></i>PINTEREST</a>
                                <a href="#" class="btn btn-primary btn-icon-left google"><i
                                        class="fa fa-google"></i>GOOGLE</a>
                            </p> -->
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>

</html>