<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/dashboard.php');

//echo "<pre>"; var_dump($_SESSION); echo "</pre>";

if (isset($_GET['online']))
    echo json_encode( getOnlineUsersLastHour() );

else if (isset($_GET['today']))
    echo json_encode( getOnlineUsersToday() );

else if (isset($_GET['orders']))
    echo json_encode( getNewOrders() );


else if (isset($_GET['sold'])) {
    if (isset($_GET['more']))
        echo json_encode(getMostSoldItems(20));
    else
        echo json_encode(getMostSoldItems(5));
}
else if (isset($_GET['transactions'])) {
    if (isset($_GET['more']))
        echo json_encode(getRecentTransactions(20));
    else
        echo json_encode(getRecentTransactions(5));
}
?>