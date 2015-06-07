<?php

function how_long_ago($timestamp)
{
    date_default_timezone_set('Europe/Lisboa');

    $delta_time = time() - strtotime($timestamp);

    $days = floor($delta_time / 86400);
    $hours = floor($delta_time / 3600);
    $minutes = floor($delta_time / 60);
    $seconds = $delta_time;


    if ($days > 0)
        $result = "{$days} days ago";
    elseif ($hours > 0)
        $result = "{$hours} hours ago";
    elseif ($minutes > 0)
        $result = "{$minutes} minutes ago";
    else
        $result = "{$seconds} seconds ago";

    return $result;
}

function getOnlineUsersLastHour() { // ''
    global $conn;

    $query = "SELECT COUNT(Utilizador.id)
              FROM Utilizador
              WHERE Utilizador.online >= (CURRENT_TIMESTAMP - INTERVAL '1 hour')";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetch();
}

function getOnlineUsersToday() { // ''
    global $conn;

    $query = "SELECT COUNT(Utilizador.id)
              FROM Utilizador
              WHERE Utilizador.online >= (CURRENT_DATE + INTERVAL '0 hour')";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetch();
}

function getNewOrders() { // ''
    global $conn;

    $query = "SELECT COUNT(BuyOrder.id)
              FROM BuyOrder
              WHERE BuyOrder.created >= (CURRENT_TIMESTAMP - INTERVAL '24 hour')";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetch();
}

function getMostSoldItems($number) {
    global $conn;

    $query = 'SELECT Product.*
              FROM Product
              ORDER BY Product.sold DESC
              LIMIT ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($number));

    $data = $stmt->fetchAll();

    foreach ($data as $key => $value)
        $data[$key]['game'] = is_array(isGame($data[$key]['id']));

    return $data;
}

function isGame($id) {
    global $conn;

    $query = 'SELECT Game.*
              FROM Game
              WHERE Game.product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($id));

    return $stmt->fetch();
}

function getRecentEvents($number) {
    global $conn;

    $query = 'SELECT *
              FROM "teste"."Events"
              ORDER BY "timestamp" DESC
              LIMIT ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($number));

    $events = $stmt->fetchAll();

    foreach($events as $key => $value)
        $events[$key]['time'] = how_long_ago($events[$key]['timestamp']);

    return $events;
}

function getRecentTransactions($number) {
    global $conn;

    $query = 'SELECT BuyOrder.*
              FROM BuyOrder
              ORDER BY BuyOrder.id DESC
              LIMIT ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($number));

    return $stmt->fetchAll();
}

?>