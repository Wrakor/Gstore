<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 23:55:41
         compiled from "C:\xampp\htdocs\lbaw\final\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204525574b5739e3ec4-56499722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32815811532596ebfcd81d025840093fdcff350c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\final\\templates\\users\\login.tpl',
      1 => 1433714037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204525574b5739e3ec4-56499722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574b5739eb1e0_87787353',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574b5739eb1e0_87787353')) {function content_5574b5739eb1e0_87787353($_smarty_tpl) {?><div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign in</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group has-feedback">
                                <input id="usernameLogin" class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
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
                            <button type="button" id="registbutt" class="btn btn-lg btn-primary btn-block" type="submit" href="#" data-toggle="modal" data-target="#signup" onclick="getPostalCodes()">I don't have an account!</button>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div><?php }} ?>
