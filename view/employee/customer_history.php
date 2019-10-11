<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid my-3">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <?php include "dashboard.php"; ?>
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4><strong>Client reservation history</strong></h4>
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
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Rented</th>
                                                    <th>Price</th>
                                                    <th>TOS</th>
                                                    <th>Notes</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($clientReservation as $key => $c):
                                                    ?>
                                                <tr>
                                                    <td><?=$c['ID'] ?></td>
                                                    <td><?=$c['carID'] ?></td>
                                                    <td><?=$c['dateStart'] ?></td>
                                                    <td><?=$c['dateEnd'] ?></td>
                                                    <td><?php if($c['rented']==1){ echo "Yes";} else {echo "No";} ?>
                                                    </td>
                                                    <td><?=$c['price'] ?></td>
                                                    <td><?php if($c['tosAccepted']){ echo "Accepted";} else {echo "Decline";} ?>
                                                    </td>
                                                    <td><?=$c['notes'] ?></td>
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