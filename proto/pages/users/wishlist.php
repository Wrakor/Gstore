<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $wishlist = getWishlist($userinfo[0]['userid']);
    $smarty->assign('wishlist',$wishlist);
    $smarty->display('users/wishlist.tpl');
?>