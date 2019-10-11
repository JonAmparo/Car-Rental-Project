<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Return Dashboard</h1>
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
                                                    <th>Rental ID</th>
                                                    <th>Return Date</th>
                                                    <th>Inspected</th>
                                                    <th>Damage</th>
                                                    <th>Notes</th>
                                                    <th>Gas Level</th>
                                                    <th>mileage</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($allReturns as $key => $returnn):
                                                    $r = new ReturnRental($returnn);
                                                    ?>
                                                <tr>
                                                    <td><?= $r->getReturnID() ?></td>
                                                    <td><?= $r->getRentalID() ?></td>
                                                    <td><?= $r->getReturnDate() ?></td>


                                                    <?php if ($r->getInspected()==1){ ?>
                                                    <td><?php echo "Inspected"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not Inspected"; ?></td>
                                                    <?php } ?>

                                                    <?php if ($r->getDamage()==1){ ?>
                                                    <td><?php echo "Damaged"; ?></td>
                                                    <?php } else {?>
                                                    <td><?php echo "Not Damaged"; ?></td>
                                                    <?php } ?>
                                                    <td><?= $r->getnotes() ?></td>

                                                    <td><?= $r->getGasLevel() ?></td>

                                                    <td><?= $r->getMileage() ?></td>

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