<?php $dashboard = $_SESSION['dashboard']; ?>
<br>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h4><strong>
                            <div>Total Clients:<span style="color:green;"> <?= $dashboard->getTotalClient() ?></span></div>
                        </strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-right">
                        <h4><strong>
                            <div>Total Rented Cars: <span style="color:green;"> <?= $dashboard->getTotalRentedCar() ?></span></div>
                        </strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-right">
                        <h4><strong>
                            <div>Total Reservations: <span style="color:green;"> <?= $dashboard->getTotalReservation() ?></span></div>
                        </strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 text-right">
                        <h4><strong>
                            <div>Total Cars: <span style="color:green;"> <?= $dashboard->getTotalCar() ?></span></div>
                        </strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>

