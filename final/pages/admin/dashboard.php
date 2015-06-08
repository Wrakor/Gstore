<?php
    include_once('../../config/init.php');

if(!(isset($_SESSION["username"]) && isset($_SESSION["admin"])))
    header('Location: '.$BASE_URL);

    include_once($BASE_DIR .'database/dashboard.php');

    unset($data);

    $data['online'] = getOnlineUsersLastHour();
    $data['today'] = getOnlineUsersToday();
    $data['orders'] = getNewOrders();

    $data['sold'] = getMostSoldItems(5);
    $data['events'] = getRecentEvents(5);
    $data['transactions'] = getRecentTransactions(5);

    $data['nav']['dashboard'] = true;

    //echo "<pre>"; var_dump($data); echo "</pre>";

    $smarty->assign('data', $data);
    $smarty->display('admin/dashboard.tpl');

?>