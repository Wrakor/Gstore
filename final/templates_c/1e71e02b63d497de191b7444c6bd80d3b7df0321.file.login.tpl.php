<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 19:18:07
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3140755732b4fc93234-20114321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e71e02b63d497de191b7444c6bd80d3b7df0321' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\users\\login.tpl',
      1 => 1433610599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3140755732b4fc93234-20114321',
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
  'unifunc' => 'content_55732b4fc9a4f3_19385081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55732b4fc9a4f3_19385081')) {function content_55732b4fc9a4f3_19385081($_smarty_tpl) {?><div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
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
                            <a type="button" id="registbutt" class="btn btn-lg btn-primary btn-block" type="submit" href="#regist" data-toggle="modal" data-target="#signup" onclick="getPostalCodes();bindRegistValidations();">I don't have an account!</a>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div><?php }} ?>
