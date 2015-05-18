<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userInfo.php');
    include_once($BASE_DIR .'database/userprofileinfo.php');

    if(isset($_SESSION["username"]))
        $userinfo = getUserInfo($_SESSION['username']);

    $wishlist = getWishlist($userinfo[0]['userid']);
    /*echo "<pre>";
    var_dump($userinfo[0]['userid']);
    echo "</pre>";*/
    $smarty->assign('wishlist',$wishlist);
    $smarty->display('users/wishlist.tpl');
?>