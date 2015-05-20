<?php include_once "admin_open.php"; ?>

    <div id="wrapper">

    <?php include_once "admin_nav.php"; ?>

    <div id="page-wrapper">

    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>Store Overview</small>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>Users Online</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-street-view fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">80</div>
                            <div>Visits Today</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">47</div>
                            <div>New Orders</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->



    <div class="row">


        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-diamond fa-fw"></i> Most Sold</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-info">
                            <span class="label label-info">57</span>
                            <i class="fa fa-fw fa-gamepad"></i> Elder Scrolls Online
                        </a>
                        <a href="#" class="list-group-item list-group-item-default">
                            <span class="label label-default">40</span>
                            <i class="fa fa-fw fa-gamepad"></i> Borderlands 2
                        </a>
                        <a href="#" class="list-group-item list-group-item-default">
                            <span class="label label-default">25</span>
                            <i class="fa fa-fw fa-cube"></i> Alchemist Action Figure
                        </a>
                        <a href="#" class="list-group-item list-group-item-default">
                            <span class="label label-default">22</span>
                            <i class="fa fa-fw fa-gamepad"></i> Torchlight II
                        </a>
                        <a href="#" class="list-group-item list-group-item-default">
                            <span class="label label-default">19</span>
                            <i class="fa fa-fw fa-cube"></i> Darkest Dungeon Evil Plushie
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="#">View All Products <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-history fa-fw"></i> Event Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <span class="badge">23 minutes ago</span>
                            <i class="fa fa-fw fa-truck"></i> order #392 has shipped
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">46 minutes ago</span>
                            <i class="fa fa-fw fa-archive"></i> new order #392
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">1 hour ago</span>
                            <i class="fa fa-fw fa-user"></i> new user #michaelknight31
                        </a>

                        <a href="#" class="list-group-item">
                            <span class="badge">two days ago</span>
                            <i class="fa fa-fw fa-support"></i> support request by #rambo91
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>392</td>
                                <td>10-02-2014</td>
                                <td>13:29</td>
                                <td>54.99€</td>
                            </tr>
                            <tr>
                                <td>391</td>
                                <td>10-02-2014</td>
                                <td>09:30</td>
                                <td>54.99€</td>
                            </tr>
                            <tr>
                                <td>390</td>
                                <td>10-02-2014</td>
                                <td>08:22</td>
                                <td>54.99€</td>
                            </tr>
                            <tr>
                                <td>389</td>
                                <td>09-02-2014</td>
                                <td>17:12</td>
                                <td>24.99€</td>
                            </tr>
                            <tr>
                                <td>388</td>
                                <td>08-02-2014</td>
                                <td>20:05</td>
                                <td>14.99€</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include_once "admin_close.php"; ?>