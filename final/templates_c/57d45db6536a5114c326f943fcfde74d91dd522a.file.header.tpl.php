<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 20:42:55
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:654455732b4fb4f243-08635433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d45db6536a5114c326f943fcfde74d91dd522a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\header.tpl',
      1 => 1433702051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654455732b4fb4f243-08635433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55732b4fb6f7d7_99052860',
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
<?php if ($_valid && !is_callable('content_55732b4fb6f7d7_99052860')) {function content_55732b4fb6f7d7_99052860($_smarty_tpl) {?><!DOCTYPE html>
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

    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('#incfont').click(function(){

                curSize= parseInt($('.container').css('font-size')) + 2;

                if(curSize<=20)

                $('.container').css('font-size', curSize);

            });

            $('#decfont').click(function(){

                curSize= parseInt($('.container').css('font-size')) - 2;

                if(curSize>=12)

                $('.container').css('font-size', curSize);

            });

        });

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
