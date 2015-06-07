<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/products.php');

    unset($data);

    $data['nav']['products'] = true;

    $data['categories']['games'] = getCategoriesForGames();
    $data['categories']['related'] = getCategoriesForRelated();

    echo "<pre>"; var_dump($data); echo "</pre>";

    $smarty->assign('data', $data);
    //$smarty->display('admin/products.tpl');

?>