<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 18:41:04
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/common/admin_menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1489426382555cb70385c243-10437655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47457c87f259a866868dee400b823b9949c97e55' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/common/admin_menu_logged_in.tpl',
      1 => 1432140061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1489426382555cb70385c243-10437655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555cb703865692_36498632',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555cb703865692_36498632')) {function content_555cb703865692_36498632($_smarty_tpl) {?><li>
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
