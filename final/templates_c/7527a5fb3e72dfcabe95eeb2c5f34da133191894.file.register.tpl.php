<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 08:27:56
         compiled from "/opt/lbaw/lbaw1433/public_html/aaa/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754848488553dd6ecac98b1-84690480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7527a5fb3e72dfcabe95eeb2c5f34da133191894' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/aaa/templates/users/register.tpl',
      1 => 1430086824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754848488553dd6ecac98b1-84690480',
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
  'unifunc' => 'content_553dd6ecb07d93_60717188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dd6ecb07d93_60717188')) {function content_553dd6ecb07d93_60717188($_smarty_tpl) {?><div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="normalModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
teste/actions/users/register.php" method="post" enctype="multipart/form-data">
                <h2>Or Sign Up <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['first_name'];?>
">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['last_name'];?>
">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['display_name'];?>
">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
">
                    <span class="glyphicon form-control-feedback"></span>
                </div>
               <div class="form-group  has-feedback">
                    <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="4" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['address'];?>
">
                    <span class="glyphicon form-control-feedback"></span>
               </div>

                <div class="form-group has-feedback">
                    <input type="text" name="postalcode" id="postalcode" class="form-control input-lg" placeholder="Postal Code" tabindex="4" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['postalcode'];?>
">
                    <span class="glyphicon form-control-feedback"></span>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['password'];?>
">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group has-feedback">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['password_confirmation'];?>
">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row text-center">
                    <div class="col-md-12"><input id="registeraccount" type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                </div>
                <br>
            </form>

        </div>
    </div>
</div> <!-- /.modal for #signup --><?php }} ?>
