<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:45:12
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9617460005574c978d42c01-13125307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5550bddf7923b2211ce41d3494294c45f4e9af2d' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/admin/dashboard.tpl',
      1 => 1433715726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9617460005574c978d42c01-13125307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
    'item' => 0,
    'event' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574c978ef7206_29123444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c978ef7206_29123444')) {function content_5574c978ef7206_29123444($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/admin_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

                    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>

                        <a class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['event']->value['time'];?>
</span>

                            <?php if ($_smarty_tpl->tpl_vars['event']->value['type']=='order') {?><i class="fa fa-fw fa-archive"></i> new order #<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='user') {?><i class="fa fa-fw fa-user"></i> new user #<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='review') {?><i class="fa fa-fw fa-newspaper-o"></i> new review #<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
<?php }?>
                        </a>

                    <?php } ?>

                </div>
                <div class="text-right">
                    <a href="#" id="events-view-all">View More <i class="fa fa-arrow-circle-right"></i></a>
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
