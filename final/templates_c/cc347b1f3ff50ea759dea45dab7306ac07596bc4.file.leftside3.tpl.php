<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 05:39:04
         compiled from "C:\xampp\htdocs\lbaw\final\templates\common\leftside3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1425155750e5851ea37-51532116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc347b1f3ff50ea759dea45dab7306ac07596bc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\final\\templates\\common\\leftside3.tpl',
      1 => 1433734738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425155750e5851ea37-51532116',
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
  'unifunc' => 'content_55750e5853cde8_37853572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55750e5853cde8_37853572')) {function content_55750e5853cde8_37853572($_smarty_tpl) {?><!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <div class="col-md-3">

            <!-- Side Menu -->
            <p class="lead">Game Categories</p>
            <div class="list-group">

                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list3.php" class="list-group-item hvr-bounce-to-right <?php if (!isset($_smarty_tpl->tpl_vars['data']->value['title'][0]['plat'])&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['id']) {?>active<?php }?>">All Categories</a>


                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['gameCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list3.php?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="list-group-item hvr-bounce-to-right <?php if (!isset($_smarty_tpl->tpl_vars['data']->value['title'][0]['plat'])&&$_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['data']->value['title'][0]['id']) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>

                <?php } ?>
            </div>



        </div>


<?php }} ?>
