<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

echo getCities($_POST['district']);

?>