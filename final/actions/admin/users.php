<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

//echo "<pre>"; var_dump($_SESSION); echo "</pre>";

function get_access_level() { return (!isset($_POST['access'])) ? false : ((is_access_client()) ? true : getAdminType($_POST['access'])['id']); }
function is_access_client() { return strcmp('Client', $_POST['access'])==0; }

function check_create_generic() { return isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']); }
function check_create_client() { return isset($_POST['first']) && isset($_POST['last']) && isset($_POST['address']) && isset($_POST['postal']); }

function validate_user_generic() {

    $regex_username = "/^[a-zA-Z0-9]{2,}$/i";
    $regex_password = "/[a-zA-Z0-9]{6,}$/i";

    return (
        preg_match($regex_username, $_POST['username'])    &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
        preg_match($regex_password, $_POST['password'])
    );
}
function validate_user_client() {

    $regex_name     = "/^[a-zA-Z]+([ ][a-zA-Z]+)*$/i";
    $regex_address  = "/^[a-zA-Z]+([ ][a-zA-Z0-9]+)*$/i";
    $regex_postal   = "/^[0-9]{4}[-][0-9]{3}$/i";

    return (
        preg_match($regex_name, $_POST['first'])      &&
        preg_match($regex_name, $_POST['last'])       &&
        preg_match($regex_address, $_POST['address']) &&
        preg_match($regex_postal, $_POST['postal'])
    );
}

function create(& $msg) {

    global $access;

    $access    = get_access_level();
    $c_generic = check_create_generic();
    $c_client  = check_create_client();

    if ( $access && $c_generic && $c_client )
    {
        $v_generic = validate_user_generic();
        $v_client  = ($access === true) ? validate_user_client() : true;

        if ($v_generic && $v_client) {

            $username = $_POST['username'];
            $email    = $_POST['email'];
            $password = sha1($_POST['password']);

            if ($access === true ) {
                $name       = $_POST['first'].' '.$_POST['last'];
                $address    = $_POST['address'];
                $postal4_id = getPostalCodeID(substr($_POST['postal'], 0, 4));
                $postal3    = substr($_POST['postal'], 5, 7);

                $msg = createClient($username,$email,$password,$name,$address,$postal4_id,$postal3);
            }
            else {
                $msg = createAdmin($access,$username,$email,$password);
            }
        }
        else $msg = "Syntax Error! fields are not valid.";
    }
    else $msg = "Requirement Error! no required fields.";
}


function check_edit_generic() { return isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['id']); }
function check_edit_client() { return isset($_POST['name']) && isset($_POST['address']) && isset($_POST['postal']); }

function validate_user_generic_edit() {

    $regex_id       = "/^[0-9]+$/i";
    $regex_username = "/^[a-zA-Z0-9]{2,}$/i";
    $regex_password = "/[a-zA-Z0-9]{6,}$/i";
    $regex_empty    = "/^$/i";

    return (
        preg_match($regex_id, $_POST['id'])                &&
        preg_match($regex_username, $_POST['username'])    &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
        (preg_match($regex_password, $_POST['password']) || preg_match($regex_empty, $_POST['password']))
    );
}
function validate_user_client_edit() {

    $regex_name     = "/^[a-zA-Z]+([ ][a-zA-Z]+)*$/i";
    $regex_address  = "/^[a-zA-Z]+([ ][a-zA-Z0-9]+)*$/i";
    $regex_postal   = "/^[0-9]{4}[-][0-9]{3}$/i";

    return (
        preg_match($regex_name, $_POST['name'])      &&
        preg_match($regex_address, $_POST['address']) &&
        preg_match($regex_postal, $_POST['postal'])
    );
}

function edit(& $msg) {

    global $access;

    $c_generic = check_edit_generic();
    $c_client  = check_edit_client();

    if ( $c_generic && $c_client )
    {
        $v_generic = validate_user_generic_edit();
        $admin    = isAdminID($_POST['id']);
        $v_client  = ( !$admin ) ? validate_user_client_edit() : true;

        if ($v_generic && $v_client) {

            $id = $_POST['id'];
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $password = ($_POST['password']==='') ? false : sha1($_POST['password']);

            if ( !$admin ) {
                $name       = $_POST['name'];
                $address    = $_POST['address'];
                $postal4_id = getPostalCodeID(substr($_POST['postal'], 0, 4));
                $postal3    = substr($_POST['postal'], 5, 7);

                $msg = editClient($id,$username,$email,$password,$name,$address,$postal4_id,$postal3);
            }
            else {
                $msg = editAdmin($id,$username,$email,$password);
            }
        }
        else $msg = "Syntax Error! fields are not valid.".$_POST['id']." ".$_POST['access']." ".$_POST['name'];
    }
    else $msg = "Requirement Error! no required fields.".$_POST['id']." ".$_POST['access']." ".$_POST['name'];
}

function check_active_user(){ return isset($_POST['active']) && isset($_POST['id']); }
function validate_active_user(){ return strcmp($_POST['active'],'true')==0  && is_numeric($_POST['id']); }

function active(& $msg) {
    $c_active = check_active_user();

    if ( $c_active )
    {
        $v_active = validate_active_user();

        if ( $v_active )
        {
            $id = (int) $_POST['id'];
            $msg = setUserActive($id);
        }
        else $msg = "Syntax Error! fields are not valid.".$_POST['id'];

    }
    else $msg = "Requirement Error! no required fields.";
}

function validate_inactive_user(){ return strcmp($_POST['active'],'false')==0  && is_numeric($_POST['id']); }

function inactive(& $msg) {
    $c_inactive = check_active_user();

    if ( $c_inactive )
    {
        $v_inactive = validate_inactive_user();

        if ( $v_inactive )
        {
            $id = (int) $_POST['id'];
            $msg = setUserInactive($id);
        }
        else $msg = "Syntax Error! fields are not valid.";

    }
    else $msg = "Requirement Error! no required fields.";
}

function userList(& $msg) {
    $list = getUsers();
    $msg = json_encode( $list );
}

function userData(& $msg) {
    $list = getUser($_POST['id']);
    $msg = json_encode( $list );
}

/*
 * Main Block
 * * * * * * * */

// missing: verify session data is admin-user

if (isset($_GET['create']))
    create($msg);
else if (isset($_GET['edit']))
    edit($msg);
else if (isset($_GET['active']))
    active($msg);
else if (isset($_GET['inactive']))
    inactive($msg);
else if (isset($_GET['userList']))
    userList($msg);
else if (isset($_GET['userData']))
    userData($msg);
else
    $msg = "There is no request like that available!";

echo $msg;

?>