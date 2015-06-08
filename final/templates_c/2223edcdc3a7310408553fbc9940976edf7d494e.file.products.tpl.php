<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 19:18:29
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/admin/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:828507895574dfab92ea24-57450378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2223edcdc3a7310408553fbc9940976edf7d494e' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/admin/products.tpl',
      1 => 1433783775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '828507895574dfab92ea24-57450378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574dfabba7e15_66033827',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
    'cat' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574dfabba7e15_66033827')) {function content_5574dfabba7e15_66033827($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/admin_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="wrapper">

<?php echo $_smarty_tpl->getSubTemplate ('common/admin_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">
            Product Management <small> taking care of products since..</small>
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

        <form id="form-create-product" name="form-create-product" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/products.php?create" method="POST" enctype="multipart/form-data">
            <h2>New Product <small> mostly for adding products.. ofc</small></h2>
            <hr>
            <div class="form-group has-feedback">
                <select class="form-control first-form" name="type" id="type" tabindex="0">
                    <option id="0">Select Product Type</option>
                    <option id="1">Game</option>
                    <option id="2">Related product</option>
                </select>
                <p class="help-text hide">Select another option!</p>
            </div>
            <hr>

            <div class="form-group has-feedback game-form cat" style="display:none">

                <select class="form-control" name="game-category" id="game-category" tabindex="1">
                    <option id="0">Select a Game Category</option>
                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['categories']['games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                        <option id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                    <?php } ?>
                </select>

                <p class="help-text hide">Select at least one category!</p>

                <div class="category_selection"></div>

            </div>

            <div class="form-group has-feedback game-form plat" style="display:none">

                <select class="form-control" name="game-platform" id="game-platform" tabindex="2">
                    <option id="0">Select a Game Platform</option>
                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['categories']['platforms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                        <option id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                    <?php } ?>
                </select>

                <p class="help-text hide">Select at least one category!</p>

                <div class="category_selection"></div>

            </div>

            <div class="form-group has-feedback related-form rela" style="display:none">

                <select class="form-control" name="related-category" id="related-category" tabindex="3">
                    <option id="0">Select a Related Product Category</option>
                    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['categories']['related']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                        <option id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                    <?php } ?>
                </select>

                <p class="help-text hide">Select at least one category!</p>

                <div class="category_selection"></div>

            </div>

            <hr>

            <div class="form-group has-feedback common" style="display:none">
                <input type="text" name="productname" id="productname" class="form-control" placeholder="Product Name" tabindex="4" value="">
                <p class="help-text hide">At least one character/number.</p>
            </div>
            <div class="form-group has-feedback common" style="display:none">
                <input type="text" name="price" id="price" class="form-control " placeholder="99.99" tabindex="5">
                <p class="help-text hide">Only numbers and separated by a dot . and two other numbers</p>
            </div>
            <div class="form-group has-feedback common" style="display:none">
                <textarea rows="5" name="description" id="description" class="form-control" placeholder="Description" tabindex="7" value=""></textarea>
                <p class="help-text hide"></p>
            </div>

            <div class="form-group has-feedback common" style="display:none">
                <input type="text" name="url" id="url" class="form-control " placeholder="image url" tabindex="8">
                <p class="help-text hide">Invalid url!</p>
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

        <form id="form-edit-product" name="form-edit-product" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/products.php?edit" method="POST" enctype="multipart/form-data">
            <h2>Edit product <small> id:</small></h2>
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
                <input type="text" name="productname" id="productname" class="form-control" placeholder="Display Name" tabindex="1" value="">
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
                                  <i class="fa fa-plus fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-warning" href="#" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/products.php?data">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-edit fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-info" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/products.php?active">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-bolt fa-stack-2x"></i>
                                </span>
            </button>
            <button type="button" class="btn btn-danger" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/products.php?inactive">
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
                <th style="width: 12px;"><input type="checkbox"></th>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Score</th>
                <th>Stock</th>
                <th>Active</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th style="width: 12px;"><input type="checkbox"></th>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Score</th>
                <th>Stock</th>
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
