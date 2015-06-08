<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 16:31:53
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/productlist2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18893696775575a759308266-38544096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58fbe2d304d024c6e4753427bd5ed9925ac7e2a0' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/productlist2.tpl',
      1 => 1433773882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18893696775575a759308266-38544096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5575a7593bcc55_62832540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a7593bcc55_62832540')) {function content_5575a7593bcc55_62832540($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/leftside2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
            <a class="list-group-item glyphicon glyphicon-th" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php"></a>
            <a class="list-group-item glyphicon glyphicon-th-list disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-list" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list3.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-up" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-down" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list3.php"></a>
        </div>
        <a href="#" class="btn primary" id="sorting-by-price-button2">Sort by Price</a>
        <a href="#" class="btn primary" id="sorting-by-name-button2">Sort by Name</a>
        <ul id="uldata2" class="row-fluid list-unstyled nav "></ul>


    </div>




</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
