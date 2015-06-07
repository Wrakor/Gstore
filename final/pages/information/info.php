<?php

    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/products.php');

    if ( isset($_GET['about']) )
    {
        $data['images'][0] = "http://www.shepherdventures.com/assets/images/team/img_ourTeam2.jpg";
        $data['title'] = "About us";
        $data['content'] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    }
    else if ( isset($_GET['delivery']) )
    {
        $data['title'] = "Delivery information";
        $data['content'] = nl2br( file_get_contents('../../database/delivery.txt') );
    }
    else if ( isset($_GET['privacy']) )
    {
        $data['title'] = "Privacy policy";
        $data['content'] = nl2br( file_get_contents('../../database/privacy.txt') );
    }
    else if ( isset($_GET['terms']) )
    {
        $data['title'] = "Terms & Conditions";
        $data['content'] = nl2br( file_get_contents('../../database/terms.txt') );
    }
    else if ( isset($_GET['license']) )
    {
        $data['title'] = "License";
        $data['content'] =  nl2br( file_get_contents('../../database/license.txt') );
    }
    else if ( isset($_GET['contact']) )
    {
        $data['images'][0] = $BASE_URL. "img/assets/location.png";

        $data['title'] = "Contact us";
        $data['content'] =  nl2br( file_get_contents('../../database/contact.txt') );
    }
    else if ( isset($_GET['returns']) )
    {
        $data['title'] = "Return policy";
        $data['content'] =  nl2br( file_get_contents('../../database/returns.txt') );
    }
    else if ( isset($_GET['sitemap']) )
    {
        $data['sitemap'] = true;

        $data['title'] = "Sitemap";
        $data['content'] =  "";
    }
    else
    {

    }

    $gameCategories = getGameCategories();
    $gamePlatforms = getAllGamePlatforms();
    $relatedProductCategories = getRelatedProductCategories();

    //echo "<pre>"; var_dump($product); echo "</pre>";

    $data['gameCategories'] = $gameCategories;
    $data['gamePlatforms'] = $gamePlatforms;
    $data['relatedProductCategories'] = $relatedProductCategories;

    $smarty->assign('data',$data);
    $smarty->display('information/information.tpl');
?>
