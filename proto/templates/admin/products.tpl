{include file='common/admin_header.tpl'}

<div id="wrapper">

{include file='common/admin_nav.tpl'}

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

<div class="row form number1" style="display:none">
    <div class="col-lg-1 col-md-1">

        <div class="btn-group-vertical table-ops" role="group">
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
    <div class="col-lg-10 col-md-10 col-xs-10">

        <form id="form-create-user" name="form-create-user" action="{$BASE_URL}actions/admin/products.php?create" method="POST" enctype="multipart/form-data">
            <h2>New User <small> mostly for admin creation.. ofc</small></h2>
            <hr>
            <div class="form-group has-feedback">
                <select class="form-control" name="access" id="access" tabindex="0">
                    <option id="0">Select Access Level</option>
                    <option id="1">Client</option>
                    {foreach $data.admintypes as $type}
                        <option id="{$type.id + 1}">{$type.name}</option>
                    {/foreach}
                </select>
                <p class="help-text hide">Select another option!</p>
            </div>
            <hr>

            <div class="form-group has-feedback">
                <input type="text" name="username" id="username" class="form-control" placeholder="Display Name" tabindex="1" value="">
                <p class="help-text hide">At least 2 simple letters/numbers! No spaces allowed.</p>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" value="">
                <p class="help-text hide">Incorrect email format!</p>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="3">
                <p class="help-text hide">At least 6 simple letters/numbers! No spaces allowed.</p>
            </div>

            <hr>

            <div class="form-client" style="display:none">
                <div class="form-group has-feedback">
                    <input type="text" name="first" id="first" class="form-control " placeholder="First Name" tabindex="4" value="">
                    <p class="help-text hide">At least 1 simple letter!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="text" name="last" id="last" class="form-control" placeholder="Last Name" tabindex="5" value="">
                    <p class="help-text hide">At least 1 simple letter!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="address" name="address" id="address" class="form-control" placeholder="Address" tabindex="6" value="">
                    <p class="help-text hide">At least 1 simple letter!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="postalcode" name="postal" id="postal" class="form-control" placeholder="Postal Code" tabindex="7" value="">
                    <p class="help-text hide">Expecting the following format: NNNN-NNN</p>
                </div>

                <hr>
            </div>

        </form>

    </div>
</div><!-- /.row.form.number1 -->

<div class="row form number2" style="display:none">
    <div class="col-lg-1 col-md-1">

        <div class="btn-group-vertical table-ops" role="group">
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
    <div class="col-lg-10 col-md-10 col-xs-10">

        <form id="form-edit-user" name="form-edit-user" action="{$BASE_URL}actions/admin/products.php?edit" method="POST" enctype="multipart/form-data">
            <h2>Edit User <small> id:</small></h2>
            <hr>
            <div class="form-group has-feedback">
                <select class="form-control" name="access" id="access" tabindex="0">
                    <option id="0">Select Access Level</option>
                    <option id="1">Client</option>
                    {foreach $data.admintypes as $type}
                        <option id="{$type.id + 1}">{$type.name}</option>
                    {/foreach}
                </select>
                <p class="help-text hide">Select another option!</p>
            </div>
            <hr>

            <div class="form-group has-feedback">
                <input type="text" name="username" id="username" class="form-control" placeholder="Display Name" tabindex="1" value="">
                <p class="help-text hide">At least 2 simple letters/numbers! No spaces allowed.</p>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" value="">
                <p class="help-text hide">Incorrect email format!</p>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="3">
                <p class="help-text hide">At least 6 simple letters/numbers! No spaces allowed.</p>
            </div>

            <hr>

            <div class="form-client" style="display:none">
                <div class="form-group has-feedback">
                    <input type="text" name="name" id="name" class="form-control " placeholder="Name" tabindex="4" value="">
                    <p class="help-text hide">At least 2 simple letters separated by 1 space!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="address" name="address" id="address" class="form-control" placeholder="Address" tabindex="5" value="">
                    <p class="help-text hide">At least 1 simple letter!</p>
                </div>

                <div class="form-group has-feedback">
                    <input type="postalcode" name="postal" id="postal" class="form-control" placeholder="Postal Code" tabindex="6" value="">
                    <p class="help-text hide">Expecting the following format: NNNN-NNN</p>
                </div>

                <hr>
            </div>

            <input type="hidden" id="id" name="id" value="">

        </form>

    </div>
</div><!-- /.row.form.number2 -->

<div class="row data">

    <div class="col-lg-1 col-md-1">

        <div class="btn-group-vertical table-ops" role="group">
            <button type="button" class="btn btn-success" href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-user-plus fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-warning" href="#" action="{$BASE_URL}actions/admin/products.php?userData">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-edit fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-info" action="{$BASE_URL}actions/admin/products.php?active">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-danger" action="{$BASE_URL}actions/admin/products.php?inactive">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
            </button>
        </div>

    </div>

    <div class="col-lg-10 col-md-10 col-xs-10">

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

        <table id="datatable" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th><input type="checkbox"></th>
                <th>ID</th>
                <th>Access Level</th>
                <th>Email</th>
                <th>Username</th>
                <th>Registered</th>
                <th>Online</th>
                <th>Active</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th><input type="checkbox"></th>
                <th>ID</th>
                <th>Access Level</th>
                <th>Email</th>
                <th>Username</th>
                <th>Registered</th>
                <th>Online</th>
                <th>Active</th>
            </tr>
            </tfoot>

            <tbody id="table-template-placeholder">



            </tbody>
        </table>
    </div>
</div>

</div><!-- /.container-fluid -->

</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->


{include file='common/admin_footer.tpl'}