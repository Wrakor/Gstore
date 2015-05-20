<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/dashboard.php');

    unset($data);

    $data['online'] = getOnlineUsersLastHour();
    $data['today'] = getOnlineUsersToday();
    $data['orders'] = getNewOrders();

    $data['sold'] = getMostSoldItems(5);
    // falta o events
    $data['transactions'] = getRecentTransactions(5);

    //echo "<pre>"; var_dump($data['online']); echo "</pre>";

    $data['nav']['dashboard'] = true;

    $smarty->assign('data', $data);
    $smarty->display('admin/dashboard.tpl');

?>