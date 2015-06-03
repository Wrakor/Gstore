<?php

    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/products.php');


    $product = getProduct($_GET['id']);
    $product['platforms'] = getGamePlatforms($product['id']);
    $reviews = getReviews($_GET['id']);

    $gameCategories = getGameCategories();
    $gamePlatforms = getAllGamePlatforms();
    $relatedProductCategories = getRelatedProductCategories();

    //echo "<pre>"; var_dump($product); echo "</pre>";

    $data['product'] = $product;
    $data['reviews'] = $reviews;

    $data['gameCategories'] = $gameCategories;
    $data['gamePlatforms'] = $gamePlatforms;
    $data['relatedProductCategories'] = $relatedProductCategories;

    $smarty->assign('data', $data);
    $smarty->display('products/viewProduct.tpl');
?>
