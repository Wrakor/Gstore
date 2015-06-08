<?php
function getUserInfo($username){
    global $conn;
    $query ='SELECT utilizador.username as username, utilizador.id as userid, utilizador.email as email, client.name as name, client.address as address,client.postalcodeextra as postalcodeextra ,postalcode.code as postalcode, city.name as city, district.name as district  FROM client, utilizador, postalcode, city, district
WHERE utilizador.username=? AND utilizador.id = client.user_id AND client.postalcode = postalcode.id AND postalcodeextra = client.postalcodeextra  AND city.id = postalcode.city_id AND city.district_id = district.id ';

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

    $query = 'SELECT * FROM Wishlist where client_id = ? AND product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id, $product_id));

    if (count($stmt->fetchAll()) == 0) {
        $query = 'INSERT INTO Wishlist(client_id, product_id) VALUES (?, ?)';
        $stmt = $conn->prepare($query);
        $stmt->execute(array($user_id, $product_id));

        return 0;
    }

    return 1;
}

function addToFavorites($user_id, $product_id) {
    global $conn;

    $query = 'SELECT * FROM Favorites where client_id = ? AND product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id, $product_id));

    if (count($stmt->fetchAll()) == 0) {
        $query = 'INSERT INTO Favorites(client_id, product_id) VALUES (?, ?)';
        $stmt = $conn->prepare($query);
        $stmt->execute(array($user_id, $product_id));

        return 0;
    }

    return 1;
}

function addReview($user_id, $product_id, $score, $comment) {
    global $conn;
    $query = 'INSERT INTO Review(user_id, product_id, score, comment) VALUES(?,?,?,?)';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id, $product_id, $score, $comment));}

function getCart($user_id) {
    global $conn;
    $query = 'SELECT Product.*, Media.externallink FROM Product, Game, Media, Cart WHERE Product.id = Game.product_id AND Product.medianum = Media.id AND Game.product_id = Cart.product_id AND Cart.user_id = ?';
    //$query = 'SELECT product_id FROM cart WHERE user_id = 1';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();

}

function deleteFromCart($productid, $userid) {
    global $conn;
    $query = 'DELETE FROM Cart WHERE product_id = ? and user_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($productid, $userid));
}

function addToCart($user_id, $product_id) {
    global $conn;

    $query = 'SELECT * FROM Cart where user_id = ? AND product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($user_id, $product_id));

    if (count($stmt->fetchAll()) == 0) {
        $query = 'INSERT INTO Cart(user_id, product_id) VALUES (?, ?)';
        $stmt = $conn->prepare($query);
        $stmt->execute(array($user_id, $product_id));

        return 0;
    }

    return 1;
}

function purchase($userid) {
    global $conn;

    $query = 'SELECT SUM(Product.price) FROM Cart, Product WHERE Cart.product_id = Product.id AND Cart.user_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($userid));
    $totalPrice = $stmt->fetchAll();

    $query = 'INSERT INTO Buyorder(client_id, orderdate, totalprice, status_id) VALUES (?, ?, ?, ?)';
    $stmt = $conn->prepare($query);
    $date = date('Y-m-d', time());
    echo '<pre>'; var_dump($totalPrice[0]["sum"]); echo '</pre>';
    $stmt->execute(array($userid, $date, $totalPrice[0]["sum"], 1));

    $query = 'DELETE FROM Cart WHERE user_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($userid));
}

?>