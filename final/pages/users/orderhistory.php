<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');
    include_once($BASE_DIR .'pages/products/gameCategoriesInfo.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $buyorders = getBuyOrders($userinfo[0]['userid']);
    $smarty->assign('buyorders', $buyorders);
    $smarty->display('users/orderhistory.tpl');
?>