<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:43:55
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/leftside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10542390345574c92b776307-91745884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e72b3ae5b851f9c6eb9df2ec9642ce33ec71fb' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/leftside.tpl',
      1 => 1433715726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10542390345574c92b776307-91745884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574c92b7cef00_49673867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c92b7cef00_49673867')) {function content_5574c92b7cef00_49673867($_smarty_tpl) {?><!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <div class="col-md-3">

            <!-- Side Menu -->
            <p class="lead">Game Categories</p>
            <div class="list-group">

                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php" class="list-group-item hvr-bounce-to-right <?php if (!isset($_smarty_tpl->tpl_vars['data']->value['title'][0]['plat'])&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['id']) {?>active<?php }?>">All Categories</a>


                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['gameCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="list-group-item hvr-bounce-to-right <?php if (!isset($_smarty_tpl->tpl_vars['data']->value['title'][0]['plat'])&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['id']) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>

                <?php } ?>
            </div>



        </div>


<?php }} ?>
