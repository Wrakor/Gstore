<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/userprofile.php');

if(isset($_SESSION["username"])){
    $userinfo = getUserInfo($_SESSION['username']);
    $data['userinfo'] = $userinfo;
    $smarty->assign('data', $data);
    $smarty->display('users/user.tpl');
}
else
    header("Location: $BASE_URL".'index.php');

?>