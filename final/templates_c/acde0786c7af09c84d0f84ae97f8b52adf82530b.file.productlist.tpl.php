<?php /* Smarty version Smarty-3.1.15, created on 2015-06-09 00:28:37
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/productlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17641833785574c92b1ccca0-98152342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acde0786c7af09c84d0f84ae97f8b52adf82530b' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/productlist.tpl',
      1 => 1433801429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17641833785574c92b1ccca0-98152342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574c92b3588b5_62768477',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c92b3588b5_62768477')) {function content_5574c92b3588b5_62768477($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/leftside.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="col-md-9">

    <!-- Crumbs -->
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Home</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'][0]['name'];?>
</li>
    </ol>

    <!-- Product List -->
    <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['title'][0]['name'];?>
 <small> <?php echo $_smarty_tpl->tpl_vars['data']->value['title'][0]['note'];?>
</small></h2>

    <hr class="colorgraph">

    <div id="data" class="container-fluid">

        <div class="list-group view-modes">
            <a class="list-group-item glyphicon glyphicon-th disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-th-list" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list2.php"></a>
            <a class="list-group-item glyphicon glyphicon-list" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list3.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-up disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-menu-down" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list2.php"></a>
        </div>
        <a href="#" class="btn primary" id="sorting-by-price-button">Sort by Price</a>
        <a href="#" class="btn primary" id="sorting-by-name-button">Sort by Name</a>

        <ul  style="padding-top: 5%;" id="uldata" class="row-fluid list-unstyled nav ">


        </ul>


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

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
