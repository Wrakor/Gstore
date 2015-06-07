<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 00:45:12
         compiled from "/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/admin_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18675546125574c978f14719-30125408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e57ad820e50a019596100af91961b4baa9bd7149' => 
    array (
      0 => '/Users/jrsc/BitBucket/lbaw1433/src/final/templates/common/admin_header.tpl',
      1 => 1433715726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18675546125574c978f14719-30125408',
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
  'unifunc' => 'content_5574c97905b113_23944396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574c97905b113_23944396')) {function content_5574c97905b113_23944396($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GSTOREAdmin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Shop Template CSS -->
    <!--<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/css/shop-homepage.css" rel="stylesheet">-->

    <!-- SB Admin Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/startbootstrap-sb-admin-1.0.2/css/sb-admin.css" rel="stylesheet">

    <!-- SB Admin Morris Charts CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/startbootstrap-sb-admin-1.0.2/css/plugins/morris.css" rel="stylesheet">

    <!-- SB Admin Custom Fonts -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/startbootstrap-sb-admin-1.0.2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Pictonic Icons CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/pictonic/css/pictonic.css" rel="stylesheet">

    <!-- Datepicker CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/datepicker/css/datepicker.css">

    <!-- NOTY -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/noty/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/noty/buttons.css" rel="stylesheet">

    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['nav']['users'])||isset($_smarty_tpl->tpl_vars['data']->value['nav']['products'])) {?>
        <!-- Datatables CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/datatables.js/jquery.dataTables.css" rel="stylesheet">
    <?php }?>

    <!-- Our Version CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/admin_style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php }} ?>
