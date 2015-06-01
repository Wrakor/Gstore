<?php include_once "admin_open.php"; ?>

    <div id="wrapper">

        <?php include_once "admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Product Management <small> taking care of products since..</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1">

                        <div class="btn-group-vertical" role="group" aria-label="...">
                            <a type="button" class="btn btn-success" href="admin_create_product.php">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-plus fa-stack-2x"></i>
                                </span>
                            </a>
                            <a type="button" class="btn btn-warning" href="admin_edit_product.php">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-edit fa-stack-2x"></i>
                                </span>
                            </a>
                            <button type="button" class="btn btn-info">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-11">

                        <!-- Search -->
                        <div class="input-group search">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th><a href="">ID <i class="fa fa-caret-square-o-down"></i></a></th>
                                    <th><a href="">Name <i class="fa fa-caret-down"></i></a></th>
                                    <th><a href="">Categories <i class="fa fa-caret-down"></i></a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>Darkest Dungeon</td>
                                    <td><i class="fa fa-gamepad"></i> <span class="label label-info">RPG</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>2</td>
                                    <td>Elder Scrolls Online</td>
                                    <td><i class="fa fa-gamepad"></i> <span class="label label-info">RPG</span> <span class="label label-warning">Massive Multiplayer</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>3</td>
                                    <td>Borderlands 2</td>
                                    <td><i class="fa fa-gamepad"></i> <span class="label label-info">RPG</span> <span class="label label-danger">Action</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>4</td>
                                    <td>Creativerse</td>
                                    <td><i class="fa fa-gamepad"></i> <span class="label label-info">RPG</span> <span class="label label-success">Adventure</span></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <nav class="center-block text-center">
                            <ul class="pagination pagination-lg">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>

                    </div>
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


<?php include_once "admin_close.php"; ?>