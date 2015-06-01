<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');

    unset($data);

    $data['nav']['products'] = true;

    //echo "<pre>"; var_dump($_SESSION); echo "</pre>";

    $smarty->assign('data', $data);
    $smarty->display('admin/products.tpl');

?>