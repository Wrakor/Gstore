<?php /* Smarty version Smarty-3.1.15, created on 2015-05-18 12:45:30
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7780895553e12232d5727-08105925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7f8adb8077a773e643473cc7df0e7e14d4a8e2' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/menu_logged_in.tpl',
      1 => 1431942235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7780895553e12232d5727-08105925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553e122335ddc3_10951063',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e122335ddc3_10951063')) {function content_553e122335ddc3_10951063($_smarty_tpl) {?><li>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/user.php">
        <span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
 </a>
</li>
<li>
    <a href="" data-toggle="modal" data-target="#logout">
        <span class="glyphicon glyphicon-off"></span> Logout </a>
</li><?php }} ?>
