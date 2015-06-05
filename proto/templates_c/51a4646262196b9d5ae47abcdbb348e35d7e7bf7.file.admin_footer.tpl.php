<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:09:29
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/admin_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:560993215555d95b2ad1a97-31931780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a4646262196b9d5ae47abcdbb348e35d7e7bf7' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/admin_footer.tpl',
      1 => 1433148487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560993215555d95b2ad1a97-31931780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555d95b2b27cc5_25186127',
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d95b2b27cc5_25186127')) {function content_555d95b2b27cc5_25186127($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['dashboard'])) {?>

<script id="sold-template" type="text/x-handlebars-template">

    {{#each this}}
    <a href="http://localhost:8888/proto/pages/products/item.php?id={{id}}" class="list-group-item">
        <span class="label label-info">{{sold}}</span>
        <i class="fa fa-fw {{#if game}}fa-gamepad{{else}}fa-cube{{/if}}"></i> {{name}}
    </a>
    {{/each}}

</script>



    <script id="transactions-template" type="text/x-handlebars-template">

        {{#each this}}
        <tr>
            <td>{{id}}</td>
            <td>{{created}}</td>
            <td>{{totalprice}}€</td>
        </tr>
        {{/each}}

    </script>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['users'])) {?>

    <script id="datatable-template" type="text/x-handlebars-template">

        {{#each this}}
        <tr id="id-{{id}}" class="active-{{#if active}}1{{else}}0{{/if}}">
            <td><input id="input-{{id}}" type="checkbox"></td>
            <td>{{id}}</td>
            <td>{{#if access}}{{access}}{{else}}Client{{/if}}</td>
            <td>{{email}}</td>
            <td>{{username}}</td>
            <td>{{registered}}</td>
            <td>{{online}}</td>
        </tr>
        {{/each}}

    </script>

<?php }?>

<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>

<!-- Datepicker JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/datepicker/js/bootstrap-datepicker.js"></script>

<!-- NOTY -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/noty/jquery.noty.packaged.min.js"></script>

<!-- Handlebars.js -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/handlebars/handlebars-v3.0.3.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['dashboard'])) {?>
    <!-- Custom javascript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin_dashboard.js"></script>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['users'])) {?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/datatables.js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin_users.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/user.form.validation.js"></script>
<?php }?>



</body>
</html><?php }} ?>
