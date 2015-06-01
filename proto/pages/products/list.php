<?php
    include_once('../config/init.php');
    include_once('/Users/cenas/PhpstormProjects/lbaw/src/proto/database/products.php');

    echo "<pre>"; var_dump($BASE_DIR); echo "</pre>";
echo "<pre>"; var_dump($_SERVER); echo "</pre>";

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
    else if ( isset($_GET['name']) )
    {
        $result = getProductsThatContain( $_GET['name'] );

        if (count($result) == 1) // se der 1 resultado redirecciona para a pagina do produto
        {
            header("Location: $BASE_URL".'pages/products/item.php?id='. $result[0]['id']);
        }

        $title[0]['name'] = "Search results";
        $title[0]['note'] = "for: '".$_GET['name']."'";
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
