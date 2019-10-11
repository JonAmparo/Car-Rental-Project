<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid my-3">
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top mb-0" role="navigation">
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reports Dashboard</h1>
                </div>
            </div>

            <?php include "dashboard.php"; ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="col-lg-12">
                            <h2><strong>Administrator Reports</strong></h2>

                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <h4>Cars dashboard
                                </h4>
                            </div>
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

                                                    <th width="130px">Action</th>
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
                                                    <td><img src="<?= $c->getImage() ?>" width="100" height="80"
                                                            alt="Car Image" /></td>
                                                    <td><?= $c->getDescription() ?></td>
                                                    <?php if ($c->getStatus()== 0){ ?>
                                                    <td> "Rented/Reserved" </td>
                                                    <?php } else {?>
                                                    <td><?php echo "Available"?></td>
                                                    <?php }?>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary"
                                                            href="?id=<?= $c->getCarID()?>&controller=report&action=getCarHistory">View</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4>Clients dashboard</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>FullName</th>
                                                    <th>Date of Birth</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Driver #</th>
                                                    <th>Credit Card #</th>

                                                    <th width="130px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($customers as $key => $customer):
                                                        $c = new Customer($customer);
                                                        ?>
                                                <tr>
                                                    <td><?= $c->getCustomerID() ?></td>
                                                    <td><?= $c->getUserName() ?></td>
                                                    <td><?= $c->getFullName() ?></td>
                                                    <td><?= $c->getDateofBirth() ?></td>
                                                    <td><?= $c->getPhone() ?></td>
                                                    <td><?= $c->getCustomerEmail() ?></td>
                                                    <td><?= $c->getAddress() ?></td>
                                                    <td><?= $c->getCustomerDriverLicence() ?></td>
                                                    <td><?= $c->getCreditCard() ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary"
                                                            href="?id=<?= $c->getCustomerID()?>&controller=report&action=getClientHistory">View</a>

                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4>Cars to be Rented/Returned</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Car ID</th>
                                                    <th>customer ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Car Brand</th>
                                                    <th>Car Model</th>
                                                    <th>Date Start</th>
                                                    <th>Date End</th>
                                                    <th>Price</th>

                                                    <th width="130px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($carstobeRetuns as $key => $rental):

                                                        ?>
                                                <tr>
                                                    <td><?= $rental['ID'] ?></td>
                                                    <td><?= $rental['customerID'] ?></td>
                                                    <td><?= $rental['carID'] ?></td>
                                                    <td><?= $rental['customer'] ?></td>
                                                    <td><?= $rental['carBrand'] ?></td>

                                                    <td><?= $rental['model'] ?></td>
                                                    <td><?= $rental['dateStart'] ?></td>
                                                    <td><?= $rental['dateEnd'] ?></td>
                                                    <td><?= $rental['price'] ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary"
                                                            href="?id=<?= $r->getCarID()?>&controller=report&action=getCarHistory">View</a>
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