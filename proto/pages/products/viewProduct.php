<?php

  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');


  $product = getProduct($_GET['id']);
  $reviews = getReviews($_GET['id']);
  
  $smarty->assign('product', $product);
  $smarty->assign('reviews', $reviews);
  $smarty->display('products/viewProduct.tpl');
?>
