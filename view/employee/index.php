<?php 
require_once "model/Car.class.php";
require_once "model/Dashboard.class.php";
require_once "model/Login.class.php";
?>
<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>


<div class="container-fluid pb-5">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Home Dashboard</h1>
                </div>
            </div>

            <?php include "dashboard.php" ?>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Brand</th>
                                                    <th>Model</th>
                                                    <th>type</th>
                                                    <th>Tank Capacity</th>
                                                    <th>Gas Consumption</th>
                                                    <th>Number of Passenger</th>
                                                    <th>Rent Price</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                 $cars=$_SESSION['cars'];

                                                 foreach ($cars as $key => $car):
                                                    $c = new Car($car);
                                                    ?>
                                                <tr>

                                                    <td><?= $c->getBrand() ?></td>
                                                    <td><?= $c->getModel() ?></td>
                                                    <td><?= $c->getType() ?></td>
                                                    <td><?= $c->getTankCapacity() ?></td>
                                                    <td><?= $c->getGasConsumption() ?></td>

                                                    <td><?= $c->getNumberofPassenger() ?></td>
                                                    <td><?= $c->getRentPrice() ?>$</td>
                                                    <td><img src="<?= $c->getImage() ?>" width="100" height="80"
                                                            alt="Car Image" /></td>
                                                    <?php if ($c->getStatus()==1){ ?>
                                                    <td><?php echo "Available"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Rented/Reserved"; ?></td>
                                                    <?php } ?>

                                                </tr>
                                                <?php endforeach; ?> </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>