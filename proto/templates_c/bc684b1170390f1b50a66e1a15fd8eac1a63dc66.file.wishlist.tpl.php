<?php /* Smarty version Smarty-3.1.15, created on 2015-05-19 19:59:36
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/users/wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6396391115559cf5fdc32b6-69919278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc684b1170390f1b50a66e1a15fd8eac1a63dc66' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/users/wishlist.tpl',
      1 => 1432054762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6396391115559cf5fdc32b6-69919278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559cf5fe628e1_75453537',
  'variables' => 
  array (
    'wishlist' => 0,
    'product' => 0,
    'BASE_URL' => 0,
    'platforms' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559cf5fe628e1_75453537')) {function content_5559cf5fe628e1_75453537($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container">
    <div class="row">

        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="user.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item active"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
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
 $_from = $_smarty_tpl->tpl_vars['wishlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                <h4 class="media-heading">
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/products/item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
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
actions/users/deleteFromWishlist.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                                       style="margin-right: 15px"><span class="glyphicon glyphicon-remove pull-right"></span></a></h4>

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
<?php }} ?>
