<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

//echo "<pre>"; var_dump($_SESSION); echo "</pre>";

function get_access_level() { return (!isset($_POST['access'])) ? false : ((is_access_client()) ? true : getAdminType($_POST['access'])); }
function is_access_client() { return strcmp('Client', $_POST['access'])==0; }

function check_create_generic() { return isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']); }
function check_create_client() { return isset($_POST['first']) && isset($_POST['last']) && isset($_POST['address']) && isset($_POST['postal']); }

function validate_create_generic() {return true;}
function validate_create_client() {return true;}

function create(& $msg) {

    global $access;

    $access    = get_access_level();
    $c_generic = check_create_generic();
    $c_client  = check_create_client();

    if ( $access && $c_generic && $c_client )
    {
        $v_generic = validate_create_generic();
        $v_client  = ($access === true) ? validate_create_client() : true;

        if ($v_generic && $v_client) {
            // create entry in database for new user

            $msg = "success! ".$_POST['password'];

            if ($access === true )
                createClient($_POST['username'],$_POST['email'],$_POST['password'],$_POST['first'],$_POST['last'],$_POST['address'],$_POST['postal']);
            else
                createAdmin($_POST['access'],$_POST['username'],$_POST['email'],$_POST['password']);

        }
        else $msg = "fields are not valid";
    }
    else $msg = "no required fields";
}


/*
 * Main Block
 * * * * * * * */

// missing: verify session data is admin-user

if (!isset($_GET['create']))
    create($msg);
else if (!isset($_GET['edit']))
    ;
else if (!isset($_GET['enable']))
    ;
else if (!isset($_GET['disable']))
    ;
else
    $msg = "There is no request like that available!";

echo $msg;

?>