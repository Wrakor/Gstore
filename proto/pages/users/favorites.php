<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');
    include_once($BASE_DIR .'database/products.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $favorites = getFavorites($userinfo[0]['userid']);

    // converter resultados num so array (por defeito vem em arrays dentro de arrays)
    for ($i = 0; $i < count($favorites); $i++) {
        $id = $favorites[$i]['id'];
        $temp = getGamePlatforms($id);

        for ($j = 0; $j < count($temp); $j++) {
            $temp[$j] = $temp[$j]['name'];
        }

        $platforms[$id] = $temp;
    }

    $smarty->assign('favorites', $favorites);
    $smarty->assign('platforms',$platforms);
    $smarty->display('users/favorites.tpl');
?>