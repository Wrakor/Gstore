<?php

function getAllUsers() {
    global $conn;

    $query = 'SELECT Utilizador.*, AdminType.name as access
              FROM Utilizador
              LEFT JOIN Admin
              ON Utilizador.id = Admin.user_id
              LEFT JOIN AdminType
              ON Admin.admin_type = AdminType.id
              ORDER BY Utilizador.id ASC';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

?>