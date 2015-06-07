<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');
    include_once($BASE_DIR .'database/products.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $wishlist = getWishlist($userinfo[0]['userid']);

    // converter resultados num so array (por defeito vem em arrays dentro de arrays)
    for ($i = 0; $i < count($wishlist); $i++) {
        $id = $wishlist[$i]['id'];
        $temp = getGamePlatforms($id);

        for ($j = 0; $j < count($temp); $j++) {
            $temp[$j] = $temp[$j]['name'];
        }

        $platforms[$id] = $temp;
    }

    $smarty->assign('wishlist',$wishlist);
    $smarty->assign('platforms',$platforms);
    $smarty->display('users/wishlist.tpl');
?>