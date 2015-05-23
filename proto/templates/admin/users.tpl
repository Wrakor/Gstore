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

                    <form id="form-create-user" name="form-create-user" action="{$BASE_URL}actions/admin/users.php" method="POST" enctype="multipart/form-data">
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

                    <form id="form-edit-user" name="form-create-user" action="{$BASE_URL}actions/admin/users.php" method="POST" enctype="multipart/form-data">
                        <h2>Edit User <small> Editing dat data</small></h2>
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
            </div><!-- /.row.form.number2 -->

            <div class="row data">

                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical table-ops" role="group">
                        <a type="button" class="btn btn-success" href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-user-plus fa-stack-2x"></i>
                                </span>
                        </a>
                        <a type="button" class="btn btn-warning" href="#">
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

                <div class="col-lg-10 col-md-10 col-xs-10">
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
                </tr>
                </tfoot>

                <tbody>

                    {foreach $data.users as $user}
                    <tr id="user-{$user.id}">
                        <td><input id="input-{$user.id}" type="checkbox"></td>
                        <td>{$user.id}</td>
                        <td>{$user.access}</td>
                        <td>{$user.email}</td>
                        <td>{$user.username}</td>
                        <td>{$user.registered}</td>
                        <td>{$user.online}</td>
                    </tr>
                    {/foreach}

                </tbody>
                </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->


{include file='common/admin_footer.tpl'}