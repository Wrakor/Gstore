<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/userprofile.php');

    deleteFromFavorites($_GET['id']);
    header("Location: $BASE_URL"."pages/users/favorites.php");
    exit();
?>