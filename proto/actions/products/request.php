<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/products.php');

if ( isset($_GET) ) {

    //echo "<pre>"; var_dump($_GET); echo "</pre>";

    $data = getAllProducts();
    $json = json_encode( $data );

    echo $json;

    //echo "<pre>"; var_dump($data); echo "</pre>";
    //echo "<pre>"; var_dump($json); echo "</pre>";
}

?>