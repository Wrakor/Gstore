<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/products.php');

    //echo "<pre>"; var_dump($_GET); echo "</pre>";

    if ( isset($_GET["name"]) )
    {
        echo "Query on names with " . $_GET["name"];

        echo "<pre>"; var_dump($_GET); echo "</pre>";

        $result = getProductsThatContain( $_GET["name"] );

        echo "<pre>"; var_dump($result); echo "</pre>";




    }
    else // json name data
    {
        $data = getAllProductNames();

        foreach($data as $key => $value)
            $simple[] = $value['name'];

        $json = json_encode( $simple );

        echo $json;
    }


?>