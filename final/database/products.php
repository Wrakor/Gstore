<?php

function createProduct($type,$name,$price,$description,$url,$gcat,$pcat,$rcat) {
    global $conn;

    try {
        $conn->query("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE");
        $conn->beginTransaction();

        $query = "INSERT INTO Product(name,price,description) VALUES(?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->execute(array($name,$price,$description));

        $row = getProductIDByName($name);
        $product_id = $row['id'];

        if ($type === 1)
        {
            $query = "INSERT INTO Game(product_id) VALUES(?)";
            $stmt = $conn->prepare($query);
            $stmt->execute(array($product_id));

            foreach($gcat as $key=>$value)
            {
                $query = "INSERT INTO gamecategorygame(gamecategory_id,game_id) VALUES(?,?)";
                $stmt = $conn->prepare($query);
                $stmt->execute(array($value-1,$product_id));
            }

            foreach($pcat as $key=>$value)
            {
                $query = "INSERT INTO gameplatform(platform_id,game_id) VALUES(?,?)";
                $stmt = $conn->prepare($query);
                $stmt->execute(array($value-1,$product_id));
            }
        }
        else if ($type === 2)
        {
            $query = "INSERT INTO RelatedProduct(product_id) VALUES(?)";
            $stmt = $conn->prepare($query);
            $stmt->execute(array($product_id));

            foreach($rcat as $key=>$value)
            {
                $query = "INSERT INTO relatedproductcategoryrelatedproduct(category_id,related_id) VALUES(?,?)";
                $stmt = $conn->prepare($query);
                $stmt->execute(array($value-1,$product_id));
            }
        }

        $query = "INSERT INTO Media(product_id,name,externallink) VALUES(?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->execute(array($product_id,'main',$url));

        $row = getMediaIDForProductID($product_id);
        $media_id = $row['id'];

        $query = "INSERT INTO Image(media_id) VALUES(?)";
        $stmt = $conn->prepare($query);
        $stmt->execute(array($media_id));

        $query = "UPDATE Product SET medianum = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute(array($media_id,$product_id));

        $conn->commit();

        return "Success! Product created.";
    }
    catch (PDOException $e)
    {
        $conn->rollBack();
        errorLog("createClient",$e);
        return "DB Error! Product not created." . $e;
    }

    return;
}

function getProductIDByName($name)
{
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT id FROM product WHERE product.name = ?");
        $stmt->execute(array($name));
        $id = $stmt->fetch();

        return $id;
    }
    catch (PDOException $e)
    {
        errorLog("getProductByName",$e);
        return null;
    }

    return;
}

function getMediaIDForProductID($product_id)
{
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT id FROM media WHERE media.product_id = ?");
        $stmt->execute(array($product_id));
        $id = $stmt->fetch();

        return $id;
    }
    catch (PDOException $e)
    {
        errorLog("getMediaIDForProductID",$e);
        return null;
    }

    return;
}

function getPlatformIDByName($name)
{
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT id FROM platform WHERE platform.name = ?");
        $stmt->execute(array($name));
        $id = $stmt->fetch();

        return $id;
    }
    catch (PDOException $e)
    {
        errorLog("getPlatformIDByName",$e);
        return null;
    }

    return;
}



function isValidGCat($id)
{
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT * FROM gamecategory WHERE gamecategory.category_id = ?");
        $stmt->execute(array($id));
        $row = $stmt->fetch();

        return (count($row)>0);
    }
    catch (PDOException $e)
    {
        errorLog("isValidGCat",$e);
        return false;
    }

    return;
}

function isValidRCat($id)
{
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT * FROM relatedproductcategory WHERE relatedproductcategory.category_id = ?");
        $stmt->execute(array($id));
        $row = $stmt->fetch();

        return (count($row)>0);
    }
    catch (PDOException $e)
    {
        errorLog("isValidRCat",$e);
        return false;
    }

    return;
}

function isValidPCat($id)
{
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT * FROM platform WHERE platform.id = ?");
        $stmt->execute(array($id));
        $row = $stmt->fetch();

        return (count($row)>0);
    }
    catch (PDOException $e)
    {
        errorLog("isValidPCat",$e);
        return false;
    }

    return;
}

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
    $query = 'SELECT Product.*, Media.externallink FROM Product, Game, Media WHERE Product.id = Game.product_id AND Product.medianum = Media.id AND Product.active=?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array(true));

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
              AND Product.medianum = Media.id
              AND Product.active=?';
    $stmt = $conn->prepare($query);
    $stmt->execute(array($id,true));
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
function getGameCategoryList($id) {
    global $conn;

    $stmt = $conn->prepare('SELECT Category.name FROM Product, Game, GameCategoryGame, Category WHERE Product.id = ? AND Product.id = Game.product_id AND Game.product_id = GameCategoryGame.game_id AND GameCategoryGame.gameCategory_id = Category.id');
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

function getProducts() {
    global $conn;

    try {
        $query = 'SELECT * FROM "teste"."AllProducts"';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    catch (PDOException $e)
    {
        errorLog("getProducts",$e);
        return "DB Error! Could not fetch products from view.";
    }
}

function setProductActive($id) {
    global $conn;

    try {
        $stmt = $conn->prepare("UPDATE product
                                SET active = TRUE
                                WHERE id = ?");
        $stmt->execute(array($id));

        return "Success! Product state updated.";
    }
    catch (PDOException $e)
    {
        errorLog("setProductActive",$e);
        return "DB Error! Product state not updated.";
    }
}

function setProductInactive($id) {
    global $conn;

    try {
        $stmt = $conn->prepare("UPDATE product
                                SET active = FALSE
                                WHERE id = ?");
        $stmt->execute(array($id));

        return "Success! Product state updated.";
    }
    catch (PDOException $e)
    {
        errorLog("setProductInactive",$e);
        return "DB Error! Product state not updated.";
    }
}

?>