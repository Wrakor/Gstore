<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 23:21:18
         compiled from "C:\xampp\htdocs\lbaw\final\templates\common\leftside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7705574b573a536b0-36745728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6aa0a02d4c7605da92f6c9080cd98f6f2f505be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\final\\templates\\common\\leftside.tpl',
      1 => 1433712077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7705574b573a536b0-36745728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574b573a64172_03541370',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574b573a64172_03541370')) {function content_5574b573a64172_03541370($_smarty_tpl) {?><!-- Page Content -->
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
