<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];
if (addToWishlist($userid, $_GET['id']) == 0)
    header("Location: $BASE_URL"."pages/users/wishlist.php#wishlistupdated");
else
    header("Location: $BASE_URL"."pages/users/wishlist.php");
exit();