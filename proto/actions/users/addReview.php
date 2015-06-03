<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];
$productid = $_GET['id'];
$rating = $_POST['rating'];
$description = $_POST['description'];

addReview($userid, $productid, $rating, $description);

header("Location: $BASE_URL"."pages/products/item.php?id=".$productid);
