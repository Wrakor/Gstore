<?php /* Smarty version Smarty-3.1.15, created on 2015-05-17 23:36:17
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/leftside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1562922501553dda7fa7f995-86982350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '116d027375421f2820931cc91ffecf0033887e26' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/leftside.tpl',
      1 => 1431894975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562922501553dda7fa7f995-86982350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dda7fa82a03_63082653',
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dda7fa82a03_63082653')) {function content_553dda7fa82a03_63082653($_smarty_tpl) {?><!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Left Side -->
        <div class="col-md-3">

            <!-- Search -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>

            <br><br>

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
