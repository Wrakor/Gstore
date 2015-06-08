<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 16:31:58
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/productlist3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5413489505575a75ea82b02-37085788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b6c2f0cf46d40de564367c5760ab5daadf46c3d' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/products/productlist3.tpl',
      1 => 1433773882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5413489505575a75ea82b02-37085788',
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
  'unifunc' => 'content_5575a75eb6ceb2_98208758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a75eb6ceb2_98208758')) {function content_5575a75eb6ceb2_98208758($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/leftside3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
            <a class="list-group-item glyphicon glyphicon-th-list" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list2.php"></a>
            <a class="list-group-item glyphicon glyphicon-list disabled" href=""></a>
            <a class="list-group-item glyphicon glyphicon-menu-up" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list2.php"></a>
            <a class="list-group-item glyphicon glyphicon-menu-down disabled" href=""></a>
        </div>

        <table id="uldata3" class="table table-bordered">
            <thead>
            <tr>
                <th >Name </th>
                <th >OS </th>
                <th >Score </th>
                <!-- <th data-dynatable-column="country" class="dynatable-head">Rating </th>-->
                 <th>Price </th>
             </tr>
             </thead>
            <tbody>
            </tbody>

         </table>



     </div>




 </div>

 <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
