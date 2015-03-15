<?php include_once "admin_open.php"; ?>

    <div id="wrapper">

        <?php include_once "admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User Management <small> taking care of users since..</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1">

                        <div class="btn-group-vertical" role="group" aria-label="...">
                            <button type="button" class="btn btn-success">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-check fa-stack-2x"></i>
                                </span>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-close fa-stack-2x"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-11">

                        <form role="form">
                            <h2>Edit User <small> for unusual happenings</small></h2>
                            <hr>
                            <select class="form-control">
                                <option>Client</option>
                                <option>Admin-Support</option>
                                <option>Admin-Content</option>
                                <option>Admin-User</option>
                            </select>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control " placeholder="First Name" tabindex="1" value="Michael">

                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2" value="Knight">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3" value="mknight31">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="4" value="michaelknight@gmail.com">
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control " placeholder="New Password" tabindex="7">
                                </div>
                            </div>
                            <hr>

                        </form>

                    </div>
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->

        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


<?php include_once "admin_close.php"; ?>