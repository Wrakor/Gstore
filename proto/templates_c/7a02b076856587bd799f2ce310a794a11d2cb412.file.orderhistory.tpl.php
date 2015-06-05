<?php /* Smarty version Smarty-3.1.15, created on 2015-05-19 18:39:16
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/users/orderhistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1442841095555a20793c7d53-56614358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a02b076856587bd799f2ce310a794a11d2cb412' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/users/orderhistory.tpl',
      1 => 1432049066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442841095555a20793c7d53-56614358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555a20794663d7_69091589',
  'variables' => 
  array (
    'buyorders' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a20794663d7_69091589')) {function content_555a20794663d7_69091589($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="user.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item active"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">
                    <h2>Order History <small>with your purchase information.</small></h2>
                    <hr class="colorgraph">

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order Number</th>
                                <th>Total (€)</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buyorders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['order']->value['name']=="Awaiting Shipment") {?>
                            <tr class="warning">
                            <?php } else { ?>
                            <tr class="success">
                            <?php }?>
                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['order']->value['orderdate'];?>
</th>
                                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['totalprice'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
