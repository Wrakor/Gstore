<?php

include_once('../../config/init.php');
global $conn;

$user = $_SESSION['username'];

$target_dir = $BASE_DIR."database/userimg/";
$target_file = $target_dir . $user;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    if ($_FILES["fileToUpload"]["size"] < 500000) {
        move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file);
    }
    }





    /*
    $stmt = $conn->prepare("INSERT INTO userimage(id, image) VALUES(?,?)");
    $stmt->execute(array($user_id,lo_import($image,68583)));
*/
?>