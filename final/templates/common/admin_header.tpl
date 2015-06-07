<!DOCTYPE html>
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
    <link href="{$BASE_URL}lib/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Shop Template CSS -->
    <!--<link href="{$BASE_URL}lib/css/shop-homepage.css" rel="stylesheet">-->

    <!-- SB Admin Custom CSS -->
    <link href="{$BASE_URL}lib/startbootstrap-sb-admin-1.0.2/css/sb-admin.css" rel="stylesheet">

    <!-- SB Admin Morris Charts CSS -->
    <link href="{$BASE_URL}lib/startbootstrap-sb-admin-1.0.2/css/plugins/morris.css" rel="stylesheet">

    <!-- SB Admin Custom Fonts -->
    <link href="{$BASE_URL}lib/startbootstrap-sb-admin-1.0.2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Pictonic Icons CSS -->
    <link href="{$BASE_URL}lib/pictonic/css/pictonic.css" rel="stylesheet">

    <!-- Datepicker CSS -->
    <link href="{$BASE_URL}lib/datepicker/css/datepicker.css">

    <!-- NOTY -->
    <link href="{$BASE_URL}lib/noty/animate.css" rel="stylesheet">
    <link href="{$BASE_URL}lib/noty/buttons.css" rel="stylesheet">

    {if isset($data.nav.users) || isset($data.nav.products)}
        <!-- Datatables CSS -->
        <link href="{$BASE_URL}lib/datatables.js/jquery.dataTables.css" rel="stylesheet">
    {/if}

    <!-- Our Version CSS -->
    <link href="{$BASE_URL}css/admin_style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
