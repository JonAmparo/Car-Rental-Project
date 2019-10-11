<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid py-3">
    <div class="row">
        <div class="col-lg-12">
            <h1>Employee Dashboard</h1>
        </div>
    </div>

    <?php include "dashboard.php"; ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="?controller=user&action=addNewEmployee" class="btn btn-success pull-right my-2">Add
                        Employee</a>
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
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Status</th>

                                            <th width="180px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($employees as $key => $employee):
                                                        $e = new Employee($employee);
                                                        ?>
                                        <tr>
                                            <td><?= $e->getID() ?></td>
                                            <td><?= $e->getUserName() ?></td>
                                            <td><?= $e->getFullName() ?></td>
                                            <td><?= $e->getEmail() ?></td>
                                            <td><?= $e->getLevel() ?></td>
                                            <td><?= $e->getStatus() ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning"
                                                    href="?id=<?= $e->getID()?>&controller=user&action=getEmployee&username=<?= $e->getUserName() ?>">Edit</a>
                                                <a class="btn btn-sm btn-danger"
                                                    href="?id=<?= $e->getID()?>&controller=user&action=deleteEmployee&username=<?= $e->getUsername()?>"
                                                    onclick="return confirm('are you sure you want to delete <?= $e->getFullName() ?>')">Delete</a>
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