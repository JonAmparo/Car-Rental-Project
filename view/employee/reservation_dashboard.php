<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reservation Dashboard</h1>
                </div>
            </div>

            <?php include "dashboard.php"; ?>
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
                                                    <th>ID</th>
                                                    <th>Car ID</th>
                                                    <th>Customer ID</th>
                                                    <th>Date Start</th>
                                                    <th>Date End</th>
                                                    <th>Price</th>
                                                    <th>Terms and Conditions</th>
                                                    <th>Notes</th>

                                                    <th width="130px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($allReservations as $key => $reservation):
                                                    $c = new Reservation($reservation);
                                                    ?>
                                                <tr>
                                                    <td><?= $c->getReservationID() ?></td>
                                                    <td><?= $c->getCarID() ?></td>
                                                    <td><?= $c->getCustomerID() ?></td>
                                                    <td><?= $c->getDateStart() ?></td>
                                                    <td><?= $c->getDateEnd() ?></td>
                                                    <td><?= $c->getPrice() ?></td>
                                                    <td><?php if($c->getTosAccepted()){ echo "Accepted";} else {echo "Decline";} ?>
                                                    </td>
                                                    <td><?= $c->getNotes() ?></td>

                                                    <?php if($c->getRented()==0 && $c->getCancel()==0) {?>

                                                    <td>
                                                        <a class="btn btn-sm btn-warning"
                                                            href="?id=<?= $c->getReservationID()?>&controller=rental&action=getSingleReservation&id=<?= $c->getReservationID()?>">Edit</a>
                                                        <a class="btn btn-sm btn-danger"
                                                            href="?id=<?= $c->getReservationID() ?>&controller=rental&action=cancel_Reservation&carId=<?= $c->getCarID() ?>"
                                                            onclick="return confirm('are you sure you want to cancel ')">Cancel</a>
                                                    </td>
                                                    <?php } else {?>

                                                    <td>

                                                        Rented </td>
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