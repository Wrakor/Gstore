<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:09:51
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/admin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1049598196555d95b292f953-74579052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f5b964495866b7b3da741da8f847fbd923cd2e' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/admin/users.tpl',
      1 => 1433148487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049598196555d95b292f953-74579052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555d95b2a10b30_80707884',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d95b2a10b30_80707884')) {function content_555d95b2a10b30_80707884($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/admin_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ('common/admin_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">
                        User Management <small> taking care of users since..</small>
                    </h1>
                </div>

            </div>

            <div class="row form number1" style="display:none">
                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical table-ops" role="group">
                        <button type="button" class="btn btn-success">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-check fa-stack-2x"></i>
                                </span>
                        </button>
                        <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-close fa-stack-2x"></i>
                                </span>
                        </button>
                    </div>

                </div>
                <div class="col-lg-10 col-md-10 col-xs-10">

                    <form id="form-create-user" name="form-create-user" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/users.php?create" method="POST" enctype="multipart/form-data">
                        <h2>New User <small> mostly for admin creation.. ofc</small></h2>
                        <hr>
                        <div class="form-group has-feedback">
                            <select class="form-control" name="access" id="access" tabindex="0">
                                <option id="0">Select Access Level</option>
                                <option id="1">Client</option>
                                <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['admintypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                                <option id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
                                <?php } ?>
                            </select>
                            <p class="help-text hide">Select another option!</p>
                        </div>
                        <hr>

                        <div class="form-group has-feedback">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Display Name" tabindex="1" value="">
                            <p class="help-text hide">At least 2 simple letters/numbers! No spaces allowed.</p>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" value="">
                            <p class="help-text hide">Incorrect email format!</p>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="3">
                            <p class="help-text hide">At least 6 simple letters/numbers! No spaces allowed.</p>
                        </div>

                        <hr>

                        <div class="form-client" style="display:none">
                            <div class="form-group has-feedback">
                                <input type="text" name="first" id="first" class="form-control " placeholder="First Name" tabindex="4" value="">
                                <p class="help-text hide">At least 1 simple letter!</p>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="text" name="last" id="last" class="form-control" placeholder="Last Name" tabindex="5" value="">
                                <p class="help-text hide">At least 1 simple letter!</p>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="address" name="address" id="address" class="form-control" placeholder="Address" tabindex="6" value="">
                                <p class="help-text hide">At least 1 simple letter!</p>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="postalcode" name="postal" id="postal" class="form-control" placeholder="Postal Code" tabindex="7" value="">
                                <p class="help-text hide">Expecting the following format: NNNN-NNN</p>
                            </div>

                            <hr>
                        </div>

                    </form>

                </div>
            </div><!-- /.row.form.number1 -->

            <div class="row form number2" style="display:none">
                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical table-ops" role="group">
                        <button type="button" class="btn btn-success">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-check fa-stack-2x"></i>
                                </span>
                        </button>
                        <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-close fa-stack-2x"></i>
                                </span>
                        </button>
                    </div>

                </div>
                <div class="col-lg-10 col-md-10 col-xs-10">

                    <form id="form-edit-user" name="form-edit-user" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/users.php?edit" method="POST" enctype="multipart/form-data">
                        <h2>Edit User <small> id:</small></h2>
                        <hr>
                        <div class="form-group has-feedback">
                            <select class="form-control" name="access" id="access" tabindex="0">
                                <option id="0">Select Access Level</option>
                                <option id="1">Client</option>
                                <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['admintypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                                    <option id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
                                <?php } ?>
                            </select>
                            <p class="help-text hide">Select another option!</p>
                        </div>
                        <hr>

                        <div class="form-group has-feedback">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Display Name" tabindex="1" value="">
                            <p class="help-text hide">At least 2 simple letters/numbers! No spaces allowed.</p>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" value="">
                            <p class="help-text hide">Incorrect email format!</p>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="3">
                            <p class="help-text hide">At least 6 simple letters/numbers! No spaces allowed.</p>
                        </div>

                        <hr>

                        <div class="form-client" style="display:none">
                            <div class="form-group has-feedback">
                                <input type="text" name="name" id="name" class="form-control " placeholder="Name" tabindex="4" value="">
                                <p class="help-text hide">At least 2 simple letters separated by 1 space!</p>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="address" name="address" id="address" class="form-control" placeholder="Address" tabindex="5" value="">
                                <p class="help-text hide">At least 1 simple letter!</p>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="postalcode" name="postal" id="postal" class="form-control" placeholder="Postal Code" tabindex="6" value="">
                                <p class="help-text hide">Expecting the following format: NNNN-NNN</p>
                            </div>

                            <hr>
                        </div>

                        <input type="hidden" id="id" name="id" value="">

                    </form>

                </div>
            </div><!-- /.row.form.number2 -->

            <div class="row data">

                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical table-ops" role="group">
                        <button type="button" class="btn btn-success" href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-user-plus fa-stack-2x"></i>
                                </span>
                        </button>
                        <button type="button" class="btn btn-warning" href="#" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/users.php?userData">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-edit fa-stack-2x"></i>
                                </span>
                        </button>
                        <button type="button" class="btn btn-info" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/users.php?active">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
                        </button>
                        <button type="button" class="btn btn-danger" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/users.php?inactive">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
                        </button>
                    </div>

                </div>

                <div class="col-lg-10 col-md-10 col-xs-10">
                <table id="datatable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>ID</th>
                    <th>Access Level</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Registered</th>
                    <th>Online</th>
                    <th>Active</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>ID</th>
                    <th>Access Level</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Registered</th>
                    <th>Online</th>
                    <th>Active</th>
                </tr>
                </tfoot>

                <tbody id="table-template-placeholder">



                </tbody>
                </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ('common/admin_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
