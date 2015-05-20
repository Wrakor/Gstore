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

            <div class="row">

                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical" role="group" aria-label="...">
                        <a type="button" class="btn btn-success" href="admin_create_user.php">
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