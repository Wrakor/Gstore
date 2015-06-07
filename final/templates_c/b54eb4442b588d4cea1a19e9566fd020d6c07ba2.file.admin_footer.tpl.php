<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:45:13
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/admin_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24952505574c9790d3269-34724138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b54eb4442b588d4cea1a19e9566fd020d6c07ba2' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/admin_footer.tpl',
      1 => 1433715726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24952505574c9790d3269-34724138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574c97913d5b6_11654310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c97913d5b6_11654310')) {function content_5574c97913d5b6_11654310($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['dashboard'])) {?>

<script id="sold-template" type="text/x-handlebars-template">

    {{#each this}}
    <a href="http://localhost:8888/final/pages/products/item.php?id={{id}}" class="list-group-item">
        <span class="label label-info">{{sold}}</span>
        <i class="fa fa-fw {{#if game}}fa-gamepad{{else}}fa-cube{{/if}}"></i> {{name}}
    </a>
    {{/each}}

</script>



    <script id="events-template" type="text/x-handlebars-template">

        {{#each this}}
        <a class="list-group-item">
            <span class="badge">{{time}}</span>

            {{#whenequal type 'order'  }}<i class="fa fa-fw fa-archive"></i> new order #{{id}}{{/whenequal}}
            {{#whenequal type 'user'   }}<i class="fa fa-fw fa-user"></i> new user #{{id}}{{/whenequal}}
            {{#whenequal type 'review' }}<i class="fa fa-fw fa-newspaper-o"></i> new review u#{{id}}{{/whenequal}}
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

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['products'])) {?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/datatables.js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin_product.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/product.form.validation.js"></script>
<?php }?>



</body>
</html><?php }} ?>
