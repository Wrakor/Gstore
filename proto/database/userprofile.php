<?php
function getUserInfo($username){
    global $conn;
    $query ='SELECT utilizador.username as username, utilizador.id as userid, utilizador.email as email, client.name as name, client.address as address, postalcode.code as postalcode, city.name as city, district.name as district  FROM client, utilizador, postalcode, city, district
WHERE utilizador.username=? AND utilizador.id = client.user_id AND client.postalcode = postalcode.id AND city.id = postalcode.city_id AND district.id = city.district_id ';

    $stmt = $conn->prepare($query);

    $stmt->execute(array($username));

    return $stmt->fetchAll();
}

function getWishlist($user_id) {
    global $conn;
    $query = 'SELECT Product.*, Media.externallink FROM Product, Game, Media, Wishlist WHERE Product.id = Game.product_id AND Product.medianum = Media.id AND Game.product_id = Wishlist.product_id AND Wishlist.client_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function deleteFromWishlist($productid) {
    global $conn;
    $query = 'DELETE FROM Wishlist WHERE product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($productid));
}

function getFavorites($user_id) {
    global $conn;
    $query = 'SELECT Product.*, Media.externallink FROM Product, Game, Media, Favorites WHERE Product.id = Game.product_id AND Product.medianum = Media.id AND Game.product_id = Favorites.product_id AND Favorites.client_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function deleteFromFavorites($productid) {
    global $conn;
    $query = 'DELETE FROM Favorites WHERE product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($productid));
}

function getBuyOrders($user_id) {
    global $conn;
    $query = 'SELECT Buyorder.id, orderdate, totalprice, status.name FROM Buyorder, Status WHERE Status.id = Buyorder.status_id AND client_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id));

    return $stmt->fetchAll();
}

function addToWishlist($user_id, $product_id) {
    global $conn;
    $query = 'INSERT INTO Wishlist(client_id, product_id) VALUES (?, ?)';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id, $product_id));
}
?>