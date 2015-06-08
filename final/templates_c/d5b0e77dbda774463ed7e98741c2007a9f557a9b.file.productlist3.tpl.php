<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 05:39:04
         compiled from "C:\xampp\htdocs\lbaw\final\templates\products\productlist3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52825575034b665a52-72500244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b0e77dbda774463ed7e98741c2007a9f557a9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\final\\templates\\products\\productlist3.tpl',
      1 => 1433734731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52825575034b665a52-72500244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5575034b6f3b08_26310708',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575034b6f3b08_26310708')) {function content_5575034b6f3b08_26310708($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
