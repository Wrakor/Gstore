<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:45:13
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/admin_menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5399224965574c9790c00d1-78840022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b5b8d5d9c11d2936d114d8d506c397bbde8a4b' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/admin_menu_logged_in.tpl',
      1 => 1433715726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5399224965574c9790c00d1-78840022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574c9790ccfe0_43557416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c9790ccfe0_43557416')) {function content_5574c9790ccfe0_43557416($_smarty_tpl) {?><li>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><i class="fa fa-desktop"></i> Return to Store</a>
</li>

<li>
    <a><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 </a>
</li>

<li>
    <a href="#" data-toggle="modal" data-target="#logout"><span class="glyphicon glyphicon-off"></span> Logout </a>
</li><?php }} ?>
