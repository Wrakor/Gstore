<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $favorites = getFavorites($userinfo[0]['userid']);
    $smarty->assign('favorites', $favorites);
    $smarty->display('users/favorites.tpl');
?>