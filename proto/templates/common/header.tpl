<!DOCTYPE html>
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
    <link href="{$BASE_URL}lib/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Shop Template CSS -->
    <link href="{$BASE_URL}lib/bootstrap-shop/style.css" rel="stylesheet">

    <!-- Pictonic Icons CSS -->
    <link  href="{$BASE_URL}lib/pictonic/css/pictonic.css" rel="stylesheet">

    <!-- Our Version CSS -->
    <link href="{$BASE_URL}css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<body>

<div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
        <div class="error">{$error}<a class="close" href="#">X</a></div>
    {/foreach}
</div>
<div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
        <div class="success">{$success}<a class="close" href="#">X</a></div>
    {/foreach}
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">