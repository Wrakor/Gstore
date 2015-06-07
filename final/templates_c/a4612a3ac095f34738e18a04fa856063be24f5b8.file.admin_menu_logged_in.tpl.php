<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:09:29
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/admin_menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1222369656555d95b2ac0810-41244253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4612a3ac095f34738e18a04fa856063be24f5b8' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/admin_menu_logged_in.tpl',
      1 => 1433148487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1222369656555d95b2ac0810-41244253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555d95b2acd6f7_36898955',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d95b2acd6f7_36898955')) {function content_555d95b2acd6f7_36898955($_smarty_tpl) {?><li>
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
