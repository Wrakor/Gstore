<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$postalcode = $_POST['postalcode'];
$postalcodeextra = $_POST['postalcodeextra'];

    if($password){
        updatePassword($_SESSION['username'],$password);
       }







?>