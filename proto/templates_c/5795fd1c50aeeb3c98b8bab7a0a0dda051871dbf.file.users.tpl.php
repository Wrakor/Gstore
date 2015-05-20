<?php /* Smarty version Smarty-3.1.15, created on 2015-05-21 00:02:03
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/admin/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2031788435555cede4889d16-39722515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5795fd1c50aeeb3c98b8bab7a0a0dda051871dbf' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/admin/users.tpl',
      1 => 1432159315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031788435555cede4889d16-39722515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555cede4ae0cb3_59418491',
  'variables' => 
  array (
    'data' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555cede4ae0cb3_59418491')) {function content_555cede4ae0cb3_59418491($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/admin_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

            <div class="row">

                <div class="col-lg-1 col-md-1">

                    <div class="btn-group-vertical" role="group" aria-label="...">
                        <a type="button" class="btn btn-success" href="admin_create_user.php">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-user-plus fa-stack-2x"></i>
                                </span>
                        </a>
                        <a type="button" class="btn btn-warning" href="admin_edit_user.php">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-edit fa-stack-2x"></i>
                                </span>
                        </a>
                        <button type="button" class="btn btn-info">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
                        </button>
                        <button type="button" class="btn btn-danger">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
                        </button>
                    </div>

                </div>

                <div class="col-lg-10 col-md-10 col-xs-10">
                <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th>ID</th>
                    <th>Access Level</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Registered</th>
                    <th>Online</th>
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
                </tr>
                </tfoot>

                <tbody>

                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <tr id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                        <td><input id="input-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" type="checkbox"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['access'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['registered'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['online'];?>
</td>
                    </tr>
                    <?php } ?>

                </tbody>
                </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->

    </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->


<?php echo $_smarty_tpl->getSubTemplate ('common/admin_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
