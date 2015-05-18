<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/products.php');

    //echo "<pre>"; var_dump($_GET); echo "</pre>";

    if( isset($_GET['cat']) ) {
        $products = array_merge( getAllGamesFromGameCategory($_GET['cat']) , getAllRelatedProductsFromRelatedProductCategory($_GET['cat']) );
        $title = array_merge( getGameCategory($_GET['cat']) , getRelatedProductCategory($_GET['cat']) );
    }
    else if( isset($_GET['plat']) ) {
        $products = getAllGamesWithPlatform($_GET['plat']);
        $title = getGamePlatform($_GET['plat']);
        $title[0]['note'] = "";
        $title[0]['plat'] = $_GET['plat'];
    }
    else if( isset($_GET['games']) ) {
        $products = getAllGames();
        $title[0]['name'] = "Games";
        $title[0]['note'] = "So many games to choose from!";
    }
    else if( isset($_GET['related']) ) {
        $products = getAllRelatedProducts();
        $title[0]['name'] = "Related Products";
        $title[0]['note'] = "All the goodies!";
    }
    else {
        $products = array_merge( getAllGames() , getAllRelatedProducts() );
        $title[0]['name'] = "All Products";
        $title[0]['note'] = "All you can find in our store";
    }

    $gameCategories = getGameCategories();
    $gamePlatforms = getAllGamePlatforms();
    $relatedProductCategories = getRelatedProductCategories();


    //echo "<pre>"; var_dump($title); echo "</pre>";

  
    foreach ($products as $key => $product)
    {
      $products[$key]['platforms'] = getGamePlatforms($product['id']);

    /* unset($media);

      //


    if (file_exists($BASE_DIR.'img/products/'.$product['externallink']))
        $media = 'img/products/'.$product['medianame'].'jpg';

    if (!$media)
        $media = 'img/assets/default.png';



    $products[$key]['media'] = $media;*/
    }

    //echo "<pre>"; var_dump($products); echo "</pre>";

    $data['products'] = $products;
    $data['title'] = $title;
    $data['gameCategories'] = $gameCategories;
    $data['gamePlatforms'] = $gamePlatforms;
    $data['relatedProductCategories'] = $relatedProductCategories;

    $smarty->assign('storage',$storage);
    $smarty->assign('data', $data);
    $smarty->display('products/productlist.tpl');
?>
