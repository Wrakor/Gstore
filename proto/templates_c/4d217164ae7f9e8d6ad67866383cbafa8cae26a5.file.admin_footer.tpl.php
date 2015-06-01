<?php /* Smarty version Smarty-3.1.15, created on 2015-05-24 23:42:44
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/common/admin_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1249424758555c556fce15e2-20273609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d217164ae7f9e8d6ad67866383cbafa8cae26a5' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/proto/templates/common/admin_footer.tpl',
      1 => 1432503758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249424758555c556fce15e2-20273609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c556fd166d2_66851648',
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c556fd166d2_66851648')) {function content_555c556fd166d2_66851648($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['dashboard'])) {?>

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
