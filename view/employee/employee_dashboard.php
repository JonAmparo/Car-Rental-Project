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
        <title>Employee Dashboard</title>

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


    <?php 
    include('includes/header.php');
    ?>
    <body class="container-fluid">
        <div id="wrapper">

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Employee Dashboard</h1>
                    </div>
                </div>

                <?php include "dashboard.php"; ?>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="employee_add.php" class="btn btn-success pull-right">Add Employee</a>
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
                                                                <a class="btn btn-sm btn-warning" href="../../index.php/?id=<?= $e->getID()?>&controller=user&action=getEmployee&username=<?= $e->getUserName() ?>">Edit</a>
                                                                <a class="btn btn-sm btn-danger" href="../../index.php/?id=<?= $e->getID()?>&controller=user&action=deleteEmployee&username=<?= $e->getUsername()?>"  onclick="return confirm('are you sure you want to delete <?= $e->getFullName() ?>')">Delete</a>
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
