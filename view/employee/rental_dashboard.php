<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rentals Dashboard</h1>
                </div>
            </div>

            <?php include "dashboard.php"; ?>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Car ID</th>
                                                    <th>customer ID</th>
                                                    <th>Date Start</th>
                                                    <th>End Date</th>
                                                    <th>TOS Accepted</th>
                                                    <th>Cancelled</th>
                                                    <th>Inspected</th>
                                                    <th>Notes</th>

                                                    <th width="130px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($rentals as $key => $rental):
                                                    $r = new Rental($rental);
                                                    ?>
                                                <tr>
                                                    <td><?= $r->getRentalID() ?></td>
                                                    <td><?= $r->getCarID() ?></td>
                                                    <td><?= $r->getCustomerID() ?></td>
                                                    <td><?= $r->getDateStart() ?></td>
                                                    <td><?= $r->getDateEnd() ?></td>

                                                    <?php if ($r->getTosAccepted()==1){ ?>
                                                    <td><?php echo "Accepted"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not accepted"; ?></td>
                                                    <?php } ?>

                                                    <td><?= $r->getCancelled() ?></td>

                                                    <?php if ($r->getInspected()==1){ ?>
                                                    <td><?php echo "Inspected"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not inspected"; ?></td>
                                                    <?php } ?>
                                                    <td><?= $r->getNotes() ?></td>
                                                    <?php  if ($r->getReturn()==0) {?>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary"
                                                            href="?id=<?= $r->getRentalID()?>&controller=rental&action=getSingleRental">Return</a>

                                                    </td>
                                                    <?php  } else {?>
                                                    <td>
                                                        <input type="button" class="btn btn-sm " value="Returned"
                                                            disabled="disabled" />

                                                    </td>
                                                    <?php  } ?>
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