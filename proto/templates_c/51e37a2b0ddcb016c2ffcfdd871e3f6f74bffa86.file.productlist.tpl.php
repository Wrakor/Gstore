<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 12:04:13
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/products/productlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:799678514553dda7f8af615-39136611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e37a2b0ddcb016c2ffcfdd871e3f6f74bffa86' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/products/productlist.tpl',
      1 => 1430129004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799678514553dda7f8af615-39136611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dda7f9a6995_67588845',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
    'platform' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dda7f9a6995_67588845')) {function content_553dda7f9a6995_67588845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/leftside.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-md-9">

    <!-- Crumbs -->
    <div class="row">
        <div class="col-md-offset-1">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
            </ol>
        </div>
    </div>

    <!-- Product List -->
    <div class="row">

        <div class="col-md-offset-1">
            <h2>Products <small> All you can find in our store</small>

                <ul class="view-modes list-inline pull-right">
                    <li class="active"><a href=""> <span class="glyphicon glyphicon-th"></span></a></li>
                    <li class=""><a href=""> <span class="glyphicon glyphicon-th-list"></span></a></li>
                    <li class=""><a href=""> <span class="glyphicon glyphicon-list"></span></a></li>
                </ul>

                <ul class="view-modes view-modes-small list-inline pull-right">
                    <li class="active"><a href="products.php"> <span class="glyphicon glyphicon glyphicon-collapse-down"></span></a></li>
                    <li class=""><a href="products2.php"> <span class="glyphicon glyphicon glyphicon-menu-up"></span></a></li>
                    <li class="">
                        <select class="form-control">
                            <option>Sort By</option>
                            <option>Name</option>
                            <option>OS</option>
                            <option>Rating</option>
                            <option>Price</option>
                        </select>
                    </li>
                </ul>
            </h2>

            <hr class="colorgraph">

            <div class="container-fluid">

                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

                <div class="col-sm-4 col-lg-4 col-md-4 product-list">
                    <div class="thumbnail thumbnail-full">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['media'];?>
" style="height: 127px" alt="">
                        <div class="caption caption-below">
                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/viewProduct.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h4>
                            <p>
                                <?php  $_smarty_tpl->tpl_vars['platform'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['platform']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['platforms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->key => $_smarty_tpl->tpl_vars['platform']->value) {
$_smarty_tpl->tpl_vars['platform']->_loop = true;
?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['platform']->value=='Windows') {?>icon-os-win-03<?php } elseif ($_smarty_tpl->tpl_vars['platform']->value=='Mac') {?>icon-os-apple<?php } else { ?>icon-os-linux_1_<?php }?>"></span>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="caption caption-br">
                            <h3 class="pull-right"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
&#8364;</h3>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
<!--
            <nav class="center-block text-center">
                <ul class="pagination pagination-lg">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
-->
        </div>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
