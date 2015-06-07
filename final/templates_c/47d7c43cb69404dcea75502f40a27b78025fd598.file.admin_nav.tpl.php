<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:09:29
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/admin_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1630836780555d95b2a61578-68567876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d7c43cb69404dcea75502f40a27b78025fd598' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/admin_nav.tpl',
      1 => 1433148487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1630836780555d95b2a61578-68567876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555d95b2abc3f0_01116667',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d95b2abc3f0_01116667')) {function content_555d95b2abc3f0_01116667($_smarty_tpl) {?><!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/dashboard.php">G<b>STORE</b>Admin</a>
    </div>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <?php echo $_smarty_tpl->getSubTemplate ('common/admin_menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['dashboard'])) {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="disabled">
                <a><i class="fa fa-fw fa-bar-chart-o"></i> Statistics</a>
            </li>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['users'])) {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/users.php"><span class="fa fa-fw fa-users"></span> Users</a>
            </li>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['products'])) {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/products.php"><i class="fa fa-fw fa-table"></i> Products</a>
            </li>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['categories'])) {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/categories.php"><span class="glyphicon glyphicon-folder-open"></span> Categories</a>
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
</div><!-- /.modal for #logout --><?php }} ?>
