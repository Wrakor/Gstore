<?php

function getAllProductNames() {
    global $conn;
    $query = 'SELECT Product.name FROM Product';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

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

    $games = $stmt->fetchAll();



    foreach($games as $key => $value){


        $stmt = $conn->prepare("SELECT platform_id FROM GamePlatform WHERE game_id  = ?");
        //echo "<pre>"; var_dump($games[$key]["product_id"]); echo "</pre>";
        $stmt->execute(array($games[$key]["id"]));
        $aux4 =  $stmt->fetchAll();
        //echo "<pre>"; var_dump($aux4); echo "</pre>";
        $games[$key]["platforms"] = [];
        foreach($aux4 as $key2 => $value2){

            //echo "<pre>"; var_dump($value2); echo "</pre>";

            $stmt = $conn->prepare("SELECT name FROM Platform WHERE id = ?");
            //echo "<pre>"; var_dump($aux4[$key2]["platform_id"]); echo "</pre>";
            $stmt->execute(array($aux4[$key2]["platform_id"]));
            $aux5 =  $stmt->fetch();



            array_push($games[$key]["platforms"], $aux5);
            //echo "<pre>"; var_dump($games[$key]["platforms"]); echo "</pre>";

        }

    }
    //$games[0]["categories"]= "Windows";
    //array_push($games[0]["categories"], "Windows");

    //echo "<pre>"; var_dump($games); echo "</pre>";
    return $games;
}

function getAllGamesFromGameCategory($id) {
    global $conn;
    $query = 'SELECT Product.*, Media.externallink
              FROM Product, Game, GameCategoryGame, Media
              WHERE GameCategoryGame.gamecategory_id = ?
              AND Game.product_id = GameCategoryGame.game_id
              AND Product.id = Game.product_id
              AND Product.medianum = Media.id';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

function getAllRelatedProducts() {
    global $conn;
    $query = 'SELECT Product.*, Media.externalLink FROM Product, RelatedProduct, Media WHERE Product.id = RelatedProduct.product_id AND Product.medianum = Media.id';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllRelatedProductsFromRelatedProductCategory($id) {
    global $conn;
    $query = 'SELECT Product.*, Media.externallink
              FROM Product, RelatedProduct, RelatedProductCategoryRelatedProduct, Media
              WHERE RelatedProductCategoryRelatedProduct.category_id = ?
              AND RelatedProduct.product_id = RelatedProductCategoryRelatedProduct.related_id
              AND Product.id = RelatedProduct.product_id
              AND Product.medianum = Media.id';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

function getProduct($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Product.*, Media.externallink FROM Product, Media WHERE Product.id = ? AND Product.medianum = Media.id');
    $stmt->execute(array($id));

    return $stmt->fetch();
}

function getProductsThatContain($string) {
    global $conn;

    $stmt = $conn->prepare("SELECT Product.* FROM Product WHERE Product.name ILIKE '%' || ? || '%' ");
    $stmt->execute(array($string));

    return $stmt->fetchAll();
}

function getAllGamePlatforms() {
    global $conn;

    $stmt = $conn->prepare('SELECT Platform.* FROM Platform');
    $stmt->execute();

    return $stmt->fetchAll();
}

function getGamePlatform($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Platform.* FROM Platform WHERE Platform.id = ?');
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

function getAllGamesWithPlatform($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Product.*, Media.externallink FROM Product, Game, Media, GamePlatform WHERE Product.id = Game.product_id AND GamePlatform.platform_id = ? AND Product.id = GamePlatform.game_id AND Product.medianum = Media.id');
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

function getGamePlatforms($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Platform.name FROM Product, Game, GamePlatform, Platform WHERE Product.id = ? AND Product.id = Game.product_id AND Game.product_id = GamePlatform.game_id AND GamePlatform.platform_id = Platform.id');
    $stmt->execute(array($id));

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

function getGameCategory($id) {
    global $conn;
    $query = 'SELECT Category.* FROM Category, GameCategory WHERE GameCategory.category_id = ? AND Category.id = GameCategory.category_id';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

function getRelatedProductCategories() {
    global $conn;
    $query = 'SELECT Category.* FROM Category, RelatedProductCategory WHERE Category.id = RelatedProductCategory.category_id';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getRelatedProductCategory($id) {
    global $conn;
    $query = 'SELECT Category.* FROM Category, RelatedProductCategory WHERE RelatedProductCategory.category_id = ? AND Category.id = RelatedProductCategory.category_id';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($id));

    return $stmt->fetchAll();
}

?>