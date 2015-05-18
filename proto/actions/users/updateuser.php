<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$password = $_POST['password'];
$district = $_POST['district'];

    if($password){
        updatePassword($_SESSION['username'],$password);
       }







?>