<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/products.php');

if ( isset($_GET) ) {

    //echo "<pre>"; var_dump($_GET); echo "</pre>";



    if(isset($_GET["cat"])){
        $data = getAllGamesFromGameCategory($_GET["cat"]);
        $json = json_encode($data);

    }else {
        $data = getAllGames();
        $json = json_encode($data);

        //echo "<pre>"; var_dump($json); echo "</pre>";
    }
    echo $json;


    //echo "<pre>"; var_dump($json); echo "</pre>";
}

?>