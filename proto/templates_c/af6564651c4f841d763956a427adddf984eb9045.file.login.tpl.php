<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 08:27:56
         compiled from "/opt/lbaw/lbaw1433/public_html/aaa/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1842128254553dd6ecaaaa45-02549147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af6564651c4f841d763956a427adddf984eb9045' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/aaa/templates/users/login.tpl',
      1 => 1430090214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842128254553dd6ecaaaa45-02549147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dd6ecac5330_01360961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd6ecac5330_01360961')) {function content_553dd6ecac5330_01360961($_smarty_tpl) {?><div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign in</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
teste/actions/users/login.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input id="usernameLogin" class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <input id="passwordLogin" class="form-control" placeholder="Password" name="password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['password'];?>
">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input id="loginAccount" class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                            <button type="button" id="registbutt" class="btn btn-lg btn-primary btn-block" type="submit" href="#" data-toggle="modal" data-target="#signup">I don't have an account!</button>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div><?php }} ?>
