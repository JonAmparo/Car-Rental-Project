<?php 
if(isset($_SESSION['error'] )) { ?>
    <script>
        alert ("<?php echo  ($_SESSION['error'] )?>");
    </script>  
    <?php unset($_SESSION['error']) ;} 

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <base href="http://localhost:8080/PHPPROJMASTER/view/employee/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Employee - Cars Dashboard</title>

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
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cars Dashboard</h1>
                    </div>             
                </div>

                <?php include "dashboard.php"; ?>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="car_add.php" class="btn btn-success pull-right">Add Car</a>
                            </div>                  
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Brand</th>
                                                        <th>Model</th>
                                                        <th>type</th>
                                                        <th>Tank Capacity</th>
                                                        <th>Gas Consumption</th>
                                                        <th>Color</th>
                                                        <th>Number of Passenger</th>
                                                        <th>Rent Price</th>
                                                        <th>Image</th>
                                                        <th>Description</th>
                                                        <th>Status</th>

                                                        <th width="180px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($cars as $key => $car):
                                                        $c = new Car($car);
                                                        ?>
                                                        <tr>
                                                            <td><?= $c->getCarID() ?></td>
                                                            <td><?= $c->getBrand() ?></td>
                                                            <td><?= $c->getModel() ?></td>
                                                            <td><?= $c->getType() ?></td>
                                                            <td><?= $c->getTankCapacity() ?></td>
                                                            <td><?= $c->getGasConsumption() ?></td>
                                                            <td style="background-color: <?= $c->getColor() ?>">&nbsp;</td>
                                                            <td><?= $c->getNumberofPassenger() ?></td>
                                                            <td><?= $c->getRentPrice() ?></td>
                                                            <td><img src="../../<?= $c->getImage() ?>" width="100" height="80" alt="Car Image"/></td>
                                                            <td><?= $c->getDescription() ?></td>
                                                            <?php if ($c->getStatus()==1){ ?>
                                                                <td><?php echo "Available"; ?></td>
                                                            <?php } else {?>
                                                                <td><?php echo "Rented/Reserved"; ?></td>
                                                            <?php } ?>  
                                                            <td>
                                                                <a class="btn btn-sm btn-warning" href="../../?id=<?= $c->getCarID()?>&controller=car&action=getSingleCar">Edit</a>
                                                                <a class="btn btn-sm btn-danger" href="../../?id=<?= $c->getCarID() ?>&controller=car&action=deleteCar&id=<?= $c->getCarID() ?>" onclick="return confirm('are you sure you want to delete <?= $c->getCarID() ?>')">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
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
    </body>
    </html>
