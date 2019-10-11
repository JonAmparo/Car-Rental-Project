<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid my-3">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Car Rental/Reservation History</h1>
                </div>
            </div>

            <?php include "dashboard.php"; ?>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4><b>
                                            Car reservation history</b></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Car ID</th>
                                                    <th>Customer ID</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Price</th>
                                                    <th>TOS</th>
                                                    <th>Notes</th>
                                                    <th>Rented</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($allReservations as $key => $c):
                                                ?>
                                                <tr>
                                                    <td><?= $c['ID'] ?></td>
                                                    <td><?= $c['carID'] ?></td>
                                                    <td><?= $c['customerID'] ?></td>
                                                    <td><?= $c['dateStart'] ?></td>
                                                    <td><?= $c['dateEnd'] ?></td>
                                                    <td><?= $c['price'] ?></td>
                                                    <td><?php if($c['tosAccepted']==1){ echo "Accepted";} else {echo "Decline";} ?>
                                                    </td>
                                                    <td><?= $c['notes'] ?></td>
                                                    <td><?php if($c['rented']==1){ echo "Rented";} else {echo "to be Rented";} ?>
                                                    </td>


                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-heading">
                                <h4><b>
                                        Car renting history</b></h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Car ID</th>
                                                    <th>Customer ID</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>TOS</th>
                                                    <th>Inspected</th>
                                                    <th>Notes</th>
                                                    <th>Returned</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                        foreach ($rentals as $key => $r):

                                            ?>
                                                <tr>
                                                    <td><?= $r['ID'] ?></td>
                                                    <td><?= $r['carID'] ?></td>
                                                    <td><?= $r['customerID'] ?></td>
                                                    <td><?= $r['dateStart'] ?></td>
                                                    <td><?= $r['dateEnd'] ?></td>

                                                    <?php if ($r['tosAccepted']==1){ ?>
                                                    <td><?php echo "Accepted"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not accepted"; ?></td>
                                                    <?php } ?>



                                                    <?php if ($r['inspected']==1){ ?>
                                                    <td><?php echo "Inspected"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not inspected"; ?></td>
                                                    <?php } ?>
                                                    <td><?= $r['notes'] ?></td>
                                                    <?php if ($r['returnn']==1){ ?>
                                                    <td><?php echo "Yes"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not yet"; ?></td>
                                                    <?php } ?>

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