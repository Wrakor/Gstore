<?php

function getAllProducts() {
    global $conn;
    $query = 'SELECT Product.* FROM Product';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllGames() {
    global $conn;
    $query = 'SELECT Product.*, Media.externallink FROM Product, Game, Media WHERE Product.id = Game.product_id AND Product.medianum = Media.id';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


function getAllRelatedProducts() {
    global $conn;
    $query = 'SELECT Product.*, Media.name, Media.externalLink FROM Product, RelatedProduct, Media WHERE Product.id = RelatedProduct.product_id AND Product.id = Media.product_id';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

function getProduct($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Product.*, Media.externallink FROM Product, Media WHERE Product.id = ? AND Product.medianum = Media.id');
    $stmt->execute(array($id));

    return $stmt->fetch();
}

function getGamePlatforms($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Platform.name FROM Product, Game, GamePlatform, Platform WHERE Product.id = ? AND Product.id = Game.product_id AND Game.product_id = GamePlatform.game_id AND GamePlatform.platform_id = Platform.id');
    $stmt->execute($id);

    return $stmt->fetchAll();
}

function getReviews($id)
{
    global $conn;

    $stmt = $conn->prepare('SELECT Review.Score, Review.comment, Utilizador.username from Review, Utilizador WHERE Review.user_id = Utilizador.id AND Review.product_id = ?');
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

function getGameCategories() {
    global $conn;
    $query = 'SELECT Category.* FROM Category, GameCategory WHERE Category.id = GameCategory.category_id';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getRelatedProductCategories() {
    global $conn;
    $query = 'SELECT Category.* FROM Category, RelatedProductCategory WHERE Category.id = RelatedProductCategory.category_id';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

?>