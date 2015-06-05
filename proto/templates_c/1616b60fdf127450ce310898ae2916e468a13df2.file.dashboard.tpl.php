<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:09:29
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649105329556c3d6985fe73-39560961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1616b60fdf127450ce310898ae2916e468a13df2' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/admin/dashboard.tpl',
      1 => 1433148487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649105329556c3d6985fe73-39560961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
    'item' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556c3d69993b56_89734207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c3d69993b56_89734207')) {function content_556c3d69993b56_89734207($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/admin_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">

<?php echo $_smarty_tpl->getSubTemplate ('common/admin_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div id="online" class="huge"><?php echo $_smarty_tpl->tpl_vars['data']->value['online']['count'];?>
</div>
                        <div>Users Online</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-street-view fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['data']->value['today']['count'];?>
</div>
                        <div>Visits Today</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['data']->value['orders']['count'];?>
</div>
                        <div>New Orders</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel disabled"><p>Unavailable</p></div>
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">?</div>
                        <div>Support Tickets!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->



<div class="row">


    <div class="col-lg-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-diamond fa-fw"></i> Most Sold</h3>
            </div>
            <div class="panel-body">
                <div id="sold" class="list-group">

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['sold']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/item.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="list-group-item">
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['sold'];?>
</span>
                        <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['item']->value['game']==true) {?>fa-gamepad<?php } else { ?>fa-cube<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                    </a>

                    <?php } ?>

                </div>

                <div class="text-right">
                    <a href="#" id="sold-view-all">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-history fa-fw"></i> Event Panel</h3>
            </div>
            <div class="panel-body">
                <div id="events" class="list-group">

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
                    <a href="#">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4">
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
                            <th>Timestamp</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="transactions">

                        <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['transactions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['created'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['totalprice'];?>
€</td>
                        </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#" id="transactions-view-all">View More <i class="fa fa-arrow-circle-right"></i></a>
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

<?php echo $_smarty_tpl->getSubTemplate ('common/admin_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
