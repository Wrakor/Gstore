<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 22:58:09
         compiled from "C:\xampp\htdocs\lbaw\final\templates\users\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197625575ffbe5cc462-17466095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deca5c87443f1f3773d5a4e1141d8354b723867d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\final\\templates\\users\\cart.tpl',
      1 => 1433797087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197625575ffbe5cc462-17466095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5575ffbe6b04b4_41251826',
  'variables' => 
  array (
    'cart' => 0,
    'product' => 0,
    'BASE_URL' => 0,
    'platforms' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575ffbe6b04b4_41251826')) {function content_5575ffbe6b04b4_41251826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="container">
    <div class="row">

        <!-- Side menu -->


        <!-- Content -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-1">

                    <h2>Shopping Cart <small>There are so many games... I can't decide!</small></h2>
                    <hr class="colorgraph">

                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                        <div class="media product-list">
                            <div class="media-left media-top">
                                <a href="">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['externallink'];?>
" style="max-width: 90px; max-height: 90px">
                                </a>
                            </div>
                            <div class="media-body" style=" text-align: justify; text-justify: inter-word;padding-right: 25px">
                                <h4 class="media-heading">
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/products/item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a> </span>
                                    <?php if (in_array("Mac",$_smarty_tpl->tpl_vars['platforms']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']])) {?>
                                    <span class="icon-os-apple"></span>
                                    <?php }?>
                                    <?php if (in_array("Windows",$_smarty_tpl->tpl_vars['platforms']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']])) {?>
                                    <span class="icon-os-win-03"></span>
                                    <?php }?>
                                    <?php if (in_array("Linux",$_smarty_tpl->tpl_vars['platforms']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']])) {?>
                                        <span class="icon-os-linux"></span>
                                    <?php }?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/deleteFromCart.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                        <span class="glyphicon glyphicon-remove pull-right" data-toggle="tooltip" data-original-title="Remove" data-placement="left"></span></a></h4>

                                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</p>
                            </div>
                        </div>
                        <?php } ?>


                </div>
            </div>
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
</div><!-- /.container -->


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
