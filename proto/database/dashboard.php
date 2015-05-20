<?php

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