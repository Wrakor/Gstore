<?php /* Smarty version Smarty-3.1.15, created on 2015-05-22 10:23:02
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/information/information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1472783975555ee766888407-39939716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa84493cfe9536e626642f33d0bc4b50a2bdb3d0' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/information/information.tpl',
      1 => 1431641119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1472783975555ee766888407-39939716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'url' => 0,
    'BASE_URL' => 0,
    'category' => 0,
    'platform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555ee766ac5f32_29347034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ee766ac5f32_29347034')) {function content_555ee766ac5f32_29347034($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-md-1"></div>
<div class="col-md-10">

    <article>
        <figure>
            <?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
            <?php } ?>
        </figure>
        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</p>

        <?php if ($_smarty_tpl->tpl_vars['data']->value['sitemap']==true) {?>
            <br>
            <h4>Game Categories</h4>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['gameCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                <?php } ?>
            </ul>

            <h4>Game Platform Categories</h4>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['platform'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['platform']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['gamePlatforms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->key => $_smarty_tpl->tpl_vars['platform']->value) {
$_smarty_tpl->tpl_vars['platform']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?plat=<?php echo $_smarty_tpl->tpl_vars['platform']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['platform']->value['name'];?>
</a></li>
                <?php } ?>
            </ul>

            <h4>Related Product Categories</h4>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['relatedProductCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                <?php } ?>
            </ul>

            <h4>Information</h4>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?about">About us</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?delivery">Delivery Information</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?privacy">Privacy Policy</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?terms">Terms & Conditions</a></li>
            </ul>

            <h4>Customer Service</h4>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?contact">Contact Us</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?returns">Returns</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/information/info.php?sitemap">Site Map</a></li>
            </ul>


        <?php }?>



    </article>

</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
