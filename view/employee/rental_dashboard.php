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
        <title>Employee - Rentals Dashboard</title>

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
                                                            <a class="btn btn-sm btn-primary" href="../../?id=<?= $r->getRentalID()?>&controller=rental&action=getSingleRental">Return</a>
                                                            
                                                        </td>
                                                    <?php  } else {?>
                                                        <td>
                                                            <input type="button" class="btn btn-sm " value="Returned" disabled="disabled" />
                                                            
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
