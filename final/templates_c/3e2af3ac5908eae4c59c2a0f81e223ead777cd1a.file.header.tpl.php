<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 13:04:41
         compiled from "/opt/lbaw/lbaw1433/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134496409553dda7f9adfa0-85889781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2af3ac5908eae4c59c2a0f81e223ead777cd1a' => 
    array (
      0 => '/opt/lbaw/lbaw1433/public_html/proto/templates/common/header.tpl',
      1 => 1431941625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134496409553dda7f9adfa0-85889781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dda7f9e6a61_83448596',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
    'sucess' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dda7f9e6a61_83448596')) {function content_553dda7f9e6a61_83448596($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GSTORE</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Shop Template CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap-shop/style.css" rel="stylesheet">

    <!-- Pictonic Icons CSS -->
    <link  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/pictonic/css/pictonic.css" rel="stylesheet">

    <!-- NOTY -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/noty/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/noty/buttons.css" rel="stylesheet">

    <!-- Hover.css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/hover.css/hover-min.css" rel="stylesheet">

    <!-- Dynatable.css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/dynatable/jquery.dynatable.css" rel="stylesheet">

    <!-- Our Version CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">

        function GetDirectory()
        {
            console.log("cenas2", arguments);
//            strFile = document.FileForm.filename.value;
//            intPos = strFile.lastIndexOf("\\");
//            strDirectory = strFile.substring(0, intPos);
//            alert(strDirectory);
//            document.FileForm.Directory.value = strDirectory;
        }
    </script>

</head>

<body>

<body>

<div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
    <?php } ?>
</div>
<div id="success_messages">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
        <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
        <script>generate("success",<?php echo $_smarty_tpl->tpl_vars['sucess']->value;?>
);</script>
    <?php } ?>
</div>

<!-- Page Content -->
<div class="container">
    <div class="row"><?php }} ?>
