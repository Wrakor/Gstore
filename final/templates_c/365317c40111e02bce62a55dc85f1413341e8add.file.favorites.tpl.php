<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:51:34
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/users/favorites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:446605534555a1b14321d76-48389427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '365317c40111e02bce62a55dc85f1413341e8add' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/users/favorites.tpl',
      1 => 1433155879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446605534555a1b14321d76-48389427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555a1b1440d426_52455440',
  'variables' => 
  array (
    'favorites' => 0,
    'product' => 0,
    'BASE_URL' => 0,
    'platforms' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a1b1440d426_52455440')) {function content_555a1b1440d426_52455440($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="user.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item active"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">

                    <h2>Wishlist <small>The games you want... badly!</small></h2>
                    <hr class="colorgraph">
                    <div class="container-fluid">
                        <div class="list-group view-modes">
                            <a class="list-group-item glyphicon glyphicon-th disabled" href=""></a>
                            <a class="list-group-item glyphicon glyphicon-th-list" href=""></a>
                            <a class="list-group-item glyphicon glyphicon-list" href=""></a>
                        </div>
                    </div>
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favorites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                        <div class="media product-list">
                            <div class="media-left media-top">
                                <a href="">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['externallink'];?>
" style="max-width: 90px; max-height: 90px">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="margin-right: 15px">
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a> </span>
                                    <?php if (in_array("Mac",$_smarty_tpl->tpl_vars['platforms']->value[$_smarty_tpl->tpl_vars['product']->value['id']])) {?>
                                        <span class="icon-os-apple"></span>
                                    <?php }?>
                                    <?php if (in_array("Windows",$_smarty_tpl->tpl_vars['platforms']->value[$_smarty_tpl->tpl_vars['product']->value['id']])) {?>
                                        <span class="icon-os-win-03"></span>
                                    <?php }?>
                                    <?php if (in_array("Linux",$_smarty_tpl->tpl_vars['platforms']->value[$_smarty_tpl->tpl_vars['product']->value['id']])) {?>
                                        <span class="icon-os-linux"></span>
                                    <?php }?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/deleteFromFavorites.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                        <span class="glyphicon glyphicon-remove pull-right"></span>
                                    </a></h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<<?php ?>?php include_once "templates/common/close.php"; ?<?php ?>><?php }} ?>
