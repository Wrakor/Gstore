<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$postalcode = $_POST['postalcode'];
$postalcodeextra = $_POST['postalcodeextra'];

   echo updateUser($name,$email,$postalcode,$postalcodeextra);

?>