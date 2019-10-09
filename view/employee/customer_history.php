<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <base href="http://localhost:8080/PHPPROJMASTER/view/employee/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee - Client History</title>

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
include('header.php');
?>
<body class="container-fluid">
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
                                                        <td><?php if($c['rented']==1){ echo "Yes";} else {echo "No";} ?></td>
                                                        <td><?=$c['price'] ?></td>
                                                        <td><?php if($c['tosAccepted']){ echo "Accepted";} else {echo "Decline";} ?></td>
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
