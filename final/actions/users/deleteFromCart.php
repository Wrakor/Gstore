<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];

if ($userid != null) {
    deleteFromCart($_GET['id'], $userid);
    header("Location: $BASE_URL" . "pages/users/cart.php#cartremoved");
}

?>
