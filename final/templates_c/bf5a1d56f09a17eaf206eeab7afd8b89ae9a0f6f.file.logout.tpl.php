<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:05:11
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/users/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085753733553e12233661b5-47531074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5a1d56f09a17eaf206eeab7afd8b89ae9a0f6f' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/users/logout.tpl',
      1 => 1431940056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2085753733553e12233661b5-47531074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553e1223377b41_65852556',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e1223377b41_65852556')) {function content_553e1223377b41_65852556($_smarty_tpl) {?><!-- modal dialog for logout -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Do you really want to logout?</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <input class="btn btn-lg btn-success btn-block" type="submit" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php" value="Yes">
                            <input class="btn btn-lg btn-danger btn-block" href="#" value="No, not yet!">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div><!-- /.modal for #logout --><?php }} ?>
