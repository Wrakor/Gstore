<?php
    include_once('../../config/init.php');

if(!(isset($_SESSION["username"]) && isset($_SESSION["admin"])))
    header('Location: '.$BASE_URL);

    include_once($BASE_DIR .'database/products.php');

    unset($data);

    $data['nav']['products'] = true;

    $data['categories']['platforms'] = getAllGamePlatforms();
    $data['categories']['games'] = getGameCategories();
    $data['categories']['related'] = getRelatedProductCategories();

    //echo "<pre>"; var_dump($data); echo "</pre>";

    $smarty->assign('data', $data);
    $smarty->display('admin/products.tpl');

?>