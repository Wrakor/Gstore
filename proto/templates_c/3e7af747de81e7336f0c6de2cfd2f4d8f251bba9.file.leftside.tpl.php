<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 19:18:07
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\leftside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184555732b4fd0b375-72502034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e7af747de81e7336f0c6de2cfd2f4d8f251bba9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\leftside.tpl',
      1 => 1433610599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184555732b4fd0b375-72502034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55732b4fd1c3c2_18673893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55732b4fd1c3c2_18673893')) {function content_55732b4fd1c3c2_18673893($_smarty_tpl) {?><!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <div class="col-md-3">

            <!-- Side Menu -->
            <p class="lead">Game Categories</p>
            <div class="list-group">

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

            <button id="lol">ajax request test</button>

        </div>


<?php }} ?>
