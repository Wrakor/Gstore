<?php /* Smarty version Smarty-3.1.15, created on 2015-05-17 19:12:59
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/users/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171532713255578946ba3a76-73987214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cdc209a062f9a1c2a2bd16bab69efd80a0bab6a' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/users/user.tpl',
      1 => 1431875734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171532713255578946ba3a76-73987214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55578946c43570_59107430',
  'variables' => 
  array (
    'BASE_DIR' => 0,
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55578946c43570_59107430')) {function content_55578946c43570_59107430($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <div class="row">
        <!-- Side menu -->
        <div class="col-md-3">
            <p class="lead">My Account</p>
            <div class="list-group side-menu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_DIR']->value;?>
pages/users/user.php" class="list-group-item active"><span class="glyphicon glyphicon-list-alt"></span>Personal Information</a>
                <a href="orderhistory.php" class="list-group-item"><span class="glyphicon glyphicon-euro"></span>Order History</a>
                <a href="wishlist.php" class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Wishlist</a>
                <a href="favorites.php" class="list-group-item"><span class="glyphicon glyphicon-star"></span>Favorites</a>
                <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>Settings</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-offset-1">

                    <h2>Profile <small>with your account information.</small>
                        <ul class="view-modes list-inline pull-right">
                            <li><a href="editprofile.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
                        </ul>
                    </h2>

                    <hr class="colorgraph">

                    <div class="row">
                        <div class="col-md-3" style="text-align: center;">

                            <img data-src="holder.js/140x140" class="img-circle img-thumbnail" alt="140x140" style="width: 140px; height: 140px;" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
database/userimg/<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
database/userimg/default';" data-holder-rendered="true">
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive borderless">
                                <table class="table table-hover">
                                    <tbody>

                                    <tr>
                                        <th scope="row">Name</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['name'];?>
</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['username'];?>
</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['email'];?>
</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country</th>
                                        <td>Portal À força</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['address'];?>
</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['city'];?>
</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">District</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['district'];?>
</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Postal Code</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['userinfo'][0]['postalcode'];?>
</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
