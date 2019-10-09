


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Employee - Invoice Final</title>

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
    <link rel="icon" type="image/png" href="assets/images/icon.png">



</head>

<?php include('includes/header.php');?>

<body class="container-fluid" style="margin-left: 20px;">
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Invoice ID#</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input type="text" name="ID" id="ID" value="<?=$invoice->getID()?>" readonly="readonly">
                                        </div>

                                        <div class="form-group">
                                            <label>Return ID</label>
                                            <input type="text" name="returnID" id="returnID" class="form-control" value="<?=$invoice->getReturnID()?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label>Charge</label>
                                            <input type="text" name="charge" id="charge" class="form-control" value="<?=$invoice->getCharge()?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label>Additional Charge</label>
                                            <input type="text" name="additionalCharge" id="additionalCharge" class="form-control" readonly="readonly" value="<?=$invoice->getAdditionalCharge()?>">
                                        </div>
                                        <input type="button" class="btn btn-primary" name="print" value="print">
                                        <a href="../index.php/?controller=report&action=getAllInvoices"class="btn btn-warning">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </html>
</body>
