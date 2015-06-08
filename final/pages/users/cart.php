<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');
    include_once($BASE_DIR .'database/products.php');
    include_once($BASE_DIR .'pages/products/gameCategoriesInfo.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $cart = getCart($userinfo[0]['userid']);



    // converter resultados num so array (por defeito vem em arrays dentro de arrays)
    for ($i = 0; $i < count($cart); $i++) {
        $id = $cart[$i]['product_id'];
        $temp = getGamePlatforms($id);

        for ($j = 0; $j < count($temp); $j++) {
            $temp[$j] = $temp[$j]['name'];
        }

        $platforms[$id] = $temp;
    }



    $smarty->assign('cart',$cart);
    $smarty->assign('platforms',$platforms);
    $smarty->display('users/cart.tpl');
?>