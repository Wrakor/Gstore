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

            <div class="row form hide">
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
                        <select class="form-control" name="access" id="access" tabindex="0">
                            <option id="0">Select Access Level</option>
                            <option id="1">Client</option>
                            {foreach $data.admintypes as $type}
                            <option id="{$type.id + 1}">{$type.name}</option>
                            {/foreach}
                        </select>
                        <hr>

                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Display Name" tabindex="1" value="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="3">
                        </div>

                        <hr>

                        <div class="form-client hide">
                            <div class="form-group">
                                    <input type="text" name="first" id="first" class="form-control " placeholder="First Name" tabindex="4" value="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="last" id="last" class="form-control" placeholder="Last Name" tabindex="5" value="">
                            </div>

                            <div class="form-group">
                                <input type="address" name="address" id="address" class="form-control" placeholder="Address" tabindex="6" value="">
                            </div>

                            <div class="form-group">
                                <input type="postalcode" name="postal" id="postal" class="form-control" placeholder="Postal Code" tabindex="7" value="">
                            </div>

                            <hr>
                        </div>

                    </form>

                </div>
            </div><!-- /.row -->

            <div class="row data">

                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical table-ops" role="group">
                        <a type="button" class="btn btn-success" href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-user-plus fa-stack-2x"></i>
                                </span>
                        </a>
                        <a type="button" class="btn btn-warning" href="admin_edit_user.php">
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
                <table id="example" class="display" cellspacing="0" width="100%">
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