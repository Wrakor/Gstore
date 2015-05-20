<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/admin_users.php');

    unset($data);

    $data['users'] = getAllUsers();

    //echo "<pre>"; var_dump($data); echo "</pre>";

    $data['nav']['users'] = true;

    $smarty->assign('data', $data);
    $smarty->display('admin/users.tpl');

?>