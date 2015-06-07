<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand brand" href="{$BASE_URL}pages/admin/dashboard.php">G<b>STORE</b>Admin</a>
    </div>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        {include file='common/admin_menu_logged_in.tpl'}

    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="{if isset($data.nav.dashboard)}active{/if}">
                <a href="{$BASE_URL}pages/admin/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="disabled">
                <a><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
            </li>
            <li class="{if isset($data.nav.users)}active{/if}">
                <a href="{$BASE_URL}pages/admin/users.php"><span class="fa fa-fw fa-users"></span> Users</a>
            </li>
            <li class="{if isset($data.nav.products)}active{/if}">
                <a href="{$BASE_URL}pages/admin/products.php"><i class="fa fa-fw fa-table"></i> Products</a>
            </li>
            <li class="{if isset($data.nav.categories)}active{/if}">
                <a href="{$BASE_URL}pages/admin/categories.php"><span class="glyphicon glyphicon-folder-open"></span> Categories</a>
            </li>
            <li class="disabled">
                <a><span class="fa fa-fw fa-support"></span> Support</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>


<!-- modal dialog for logout -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Do you really want to logout?</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <input class="btn btn-lg btn-success btn-block" type="submit" href="#" value="Yes">
                            <input class="btn btn-lg btn-danger btn-block" href="#" value="No, not yet!">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div><!-- /.modal for #logout -->