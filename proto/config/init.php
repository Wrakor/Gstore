<?php
session_set_cookie_params(3600, '/~lbaw1433');
session_start();

    error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

    // Esquema da DB e Sub Folder
    $SCHEMA = "teste";
    $SUB_FOLDER = 'proto/';

    if( strcmp($_SERVER['SERVER_NAME'],'gnomo.fe.up.pt')==0 )
    {

        $BASE_DIR = '/opt/lbaw/lbaw1433/public_html/' . $SUB_FOLDER;
        $BASE_URL = '/~lbaw1433/' . $SUB_FOLDER;

        //echo "<pre>"; var_dump($_SERVER); echo "</pre>";
    }
    else if (strcmp($_SERVER['SERVER_NAME'],'localhost')==0)
    {

        $BASE_DIR = "/Users/jrsc/BitBucket/lbaw1433/src/" . $SUB_FOLDER;
        $BASE_URL = '/' . $SUB_FOLDER;

        //echo "localhost";
        //echo "<pre>"; var_dump($_SERVER); echo "</pre>";
    }
    else
    {
        $BASE_DIR = '/' . $SUB_FOLDER;
        $BASE_URL = '/' . $SUB_FOLDER;

        echo "erro";
        echo "<pre>"; var_dump($_SERVER); echo "</pre>";
    }

    $conn = new PDO('pgsql:host=vdbm.fe.up.pt;dbname=lbaw1433', 'lbaw1433', 'jK116op5');
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec('SET SCHEMA \''. $SCHEMA .'\'');

    include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

    $smarty = new Smarty;
    $smarty->template_dir = $BASE_DIR . 'templates/';
    $smarty->compile_dir = $BASE_DIR . 'templates_c/';
    $smarty->assign('BASE_URL', $BASE_URL);

    $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
    $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
    $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    $smarty->assign('USERNAME', $_SESSION['username']);

    unset($_SESSION['success_messages']);
    unset($_SESSION['error_messages']);
    unset($_SESSION['field_errors']);
    unset($_SESSION['form_values']);
?>
