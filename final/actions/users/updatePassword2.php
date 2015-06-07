<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

echo updatePassword($_SESSION['username'],$_POST['password']);

?>
