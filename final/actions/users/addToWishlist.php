<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];
echo '<pre>'; echo $userid; echo '</pre>';
//addToWishlist($userid, $_GET['id']);
header("Location: $BASE_URL"."pages/users/wishlist.php#wishlistupdated");
exit();