<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<body class="container-fluid">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Invoice Dashboard</h1>
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
                                                    <th>Return ID</th>
                                                    <th>Charge</th>
                                                    <th>Additional Charge</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($allInvoices as $key => $invoice):
                                                    $r = new Invoice($invoice);
                                                    ?>
                                                <tr>
                                                    <td><?= $r->getID() ?></td>
                                                    <td><?= $r->getReturnID() ?></td>
                                                    <td><?= $r->getCharge() ?></td>
                                                    <td><?= $r->getAdditionalCharge() ?></td>

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