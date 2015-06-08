<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');

    deleteFromWishlist($_GET['id']);
    header("Location: $BASE_URL"."pages/users/wishlist.php#wishlistremoved");
    exit();
?>