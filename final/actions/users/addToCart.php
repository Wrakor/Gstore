<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];
if ($userid != null) {
    if (addToCart($userid, $_GET['id']) == 0)
        header("Location: $BASE_URL"."pages/users/cart.php#cartupdated");
    else
        header("Location: $BASE_URL"."pages/users/cart.php");
}
else
    header("Location: $BASE_URL"."pages/products/item.php?id=".$_GET['id']."#nologin");