<?php

 //echo "before config, ";

  include_once('../../config/init.php');

//echo "before DB, ";

  include_once($BASE_DIR .'database/products.php');

//echo "before methodcall";

    $products = getAllGames();


/*echo "<pre>";
var_dump($products);
echo "</pre>";*/

  
  foreach ($products as $key => $product)
  {
    unset($media);

      //$products[$key]['platforms'] = getGamePlatforms($product['id']);

	  
    if (file_exists($BASE_DIR.'img/products/'.$product['externallink']))
        $media = 'img/products/'.$product['medianame'].'jpg';

    if (!$media)
        $media = 'img/assets/default.png';
	  
	  

    $products[$key]['media'] = $media;
  }
  
  $smarty->assign('products', $products);
  $smarty->display('products/productlist.tpl');
?>
