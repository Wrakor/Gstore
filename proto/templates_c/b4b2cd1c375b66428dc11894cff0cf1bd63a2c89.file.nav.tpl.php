<?php /* Smarty version Smarty-3.1.15, created on 2015-05-14 18:07:18
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1942999480553dda7f9eb809-09937145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4b2cd1c375b66428dc11894cff0cf1bd63a2c89' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/nav.tpl',
      1 => 1431616030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942999480553dda7f9eb809-09937145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dda7fa1c4b4_80454427',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'category' => 0,
    'platform' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dda7fa1c4b4_80454427')) {function content_553dda7fa1c4b4_80454427($_smarty_tpl) {?><!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">G<b>STORE</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <!-- Games -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Games <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?games">All Games</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Category</b></li>

                        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['gameCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

                            <li class="<?php if (!isset($_smarty_tpl->tpl_vars['data']->value['title'][0]['plat'])&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['id']) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>

                        <?php } ?>

                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Operative System</b></li>

                        <?php  $_smarty_tpl->tpl_vars['platform'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['platform']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['gamePlatforms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->key => $_smarty_tpl->tpl_vars['platform']->value) {
$_smarty_tpl->tpl_vars['platform']->_loop = true;
?>

                            <li class="<?php if ($_smarty_tpl->tpl_vars['platform']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['plat']) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?plat=<?php echo $_smarty_tpl->tpl_vars['platform']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['platform']->value['name'];?>
</a></li>

                        <?php } ?>
                    </ul>
                </li>

                <!-- Related Products -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Related Products <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?related">All Related Products</a></li>
                        <li><hr></li>
                        <li role="presentation" class="dropdown-header"><b>By Category</b></li>

                        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['relatedProductCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

                            <li class="<?php if (!isset($_smarty_tpl->tpl_vars['data']->value['title'][0]['plat'])&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['id']) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>

                        <?php } ?>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--
                <li><a href="backoffice.php"><span class="glyphicon glyphicon-lock"></span> Admin </a></li>
                <li><a href="cart.php"><span class="badge">2</span><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
                -->
                <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
</nav><!-- / navigation -->

<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('users/logout.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ('users/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('users/register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
