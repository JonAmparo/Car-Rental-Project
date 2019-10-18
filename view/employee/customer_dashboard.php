<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Client Dashboard</h1>
                </div>
            </div>

            <?php include "dashboard.php"; ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <a href="?controller=user&action=addNewCustomer" class="btn btn-success pull-right">Add
                                Customer</a>
                        </div>
                        <div class="panel-body">
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
                                                        <a class="btn btn-sm btn-warning"
                                                            href="?id=<?= $c->getCustomerID()?>&controller=user&action=getSingleCustomer">Edit</a>
                                                        <a class="btn btn-sm btn-danger"
                                                            href="?id=<?= $c->getCustomerID() ?>&controller=user&action=deleteCustomer&username=<?= $c->getUserName() ?>"
                                                            onclick="return confirm('are you sure you want to delete <?= $c->getFullName() ?>')">Delete</a>
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