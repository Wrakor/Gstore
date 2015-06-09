<?php

    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/products.php');


    $product = getProduct($_GET['id']);
    $product['platforms'] = getGamePlatforms($product['id']);
    $product['categories']= getGameCategoryList($product['id']);
    $reviews = getReviews($_GET['id']);

    $gameCategories = getGameCategories();
    $gamePlatforms = getAllGamePlatforms();
    $relatedProductCategories = getRelatedProductCategories();



    $data['product'] = $product;
    $data['reviews'] = $reviews;

    $data['gameCategories'] = $gameCategories;
    $data['gamePlatforms'] = $gamePlatforms;
    $data['relatedProductCategories'] = $relatedProductCategories;

    // round score to 2 decimal places
    $data['product']['score'] = $data['product']['score']*10;
    $data['product']['score'] = round($data['product']['score']);
    $data['product']['score'] = $data['product']['score']/10;



    $smarty->assign('data', $data);
    $smarty->display('products/viewProduct.tpl');
?>
