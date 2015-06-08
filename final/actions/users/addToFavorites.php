<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];
addToFavorites($userid, $_GET['id']);
header("Location: $BASE_URL"."pages/users/favorites.php#favoritesupdated");
exit();