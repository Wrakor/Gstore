<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

$userid = getUserInfo($_SESSION['username'])[0]['userid'];

purchase($userid);

header("Location: $BASE_URL"."pages/users/orderhistory.php#purchase");