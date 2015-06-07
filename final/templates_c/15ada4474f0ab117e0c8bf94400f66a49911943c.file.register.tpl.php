<?php /* Smarty version Smarty-3.1.15, created on 2015-04-25 17:46:29
         compiled from "templates\users\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28438553ade6a24bc66-78207593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ada4474f0ab117e0c8bf94400f66a49911943c' => 
    array (
      0 => 'templates\\users\\register.tpl',
      1 => 1429976765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28438553ade6a24bc66-78207593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553ade6a26b560_59542889',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553ade6a26b560_59542889')) {function content_553ade6a26b560_59542889($_smarty_tpl) {?><div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="normalModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
                <h2>Or Sign Up <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['first_name'];?>
">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['last_name'];?>
">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['display_name'];?>
">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
">
                </div>
                   <div class="form-group">
                    <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="4" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['address'];?>
">
                </div>

                   <div class="form-group">
                    <input type="text" name="postalcode" id="postalcode" class="form-control input-lg" placeholder="Postal Code" tabindex="4" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['postalcode'];?>
">
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['password'];?>
">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['password_confirmation'];?>
">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                                <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                                    <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                                </span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row text-center">
                    <div class="col-md-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                </div>
                <br>
            </form>

        </div>
    </div>
</div> <!-- /.modal for #signup --><?php }} ?>
