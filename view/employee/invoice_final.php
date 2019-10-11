<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid">
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
                                            <input type="text" name="ID" id="ID" class="form-control"
                                                value="<?=$invoice->getID()?>" readonly="readonly">
                                        </div>

                                        <div class="form-group">
                                            <label>Return ID</label>
                                            <input type="text" name="returnID" id="returnID" class="form-control"
                                                value="<?=$invoice->getReturnID()?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label>Charge</label>
                                            <input type="text" name="charge" id="charge" class="form-control"
                                                value="<?=$invoice->getCharge()?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label>Additional Charge</label>
                                            <input type="text" name="additionalCharge" id="additionalCharge"
                                                class="form-control" readonly="readonly"
                                                value="<?=$invoice->getAdditionalCharge()?>">
                                        </div>
                                        <input onclick="javascript:window.print()" type="button" class="btn btn-primary"
                                            name="print" value="print">
                                        <a href="?controller=report&action=getAllInvoices"
                                            class="btn btn-warning">Back</a>
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