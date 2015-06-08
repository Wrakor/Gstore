<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/products.php');


function typeOf()
{

    if (isset($_POST['type']))
    {

        if (strcmp( $_POST['type'],'Game')==0)
            return 1;

        if (strcmp($_POST['type'], 'Related product') == 0)
            return 2;
    }

    return false;
}

function check_create_generic() { return (isset($_POST['type']) && isset($_POST['productname']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['url'])); }

function validate_product_generic() {

    $regex_name  = "/^[a-zA-Z0-9-]+$/i";
    $regex_price = "/^[0-9]+(.[0-9][0-9]?)+$/i";

    return (
        preg_match($regex_name  , $_POST['productname'])    &&
        preg_match($regex_price , $_POST['price'])          &&
        filter_var($_POST['url'], FILTER_VALIDATE_URL)
    );
}

function validate_cats($type)
{
    if (isset($_POST['gcat']))
        foreach($_POST['gcat'] as $key=>$value)
            if ( !isValidGCat($value-1) )
                return false;

    if (isset($_POST['pcat']))
        foreach($_POST['pcat'] as $key=>$value)
            if ( !isValidPCat($value-1) )
                return false;

    if (isset($_POST['rcat']))
        foreach($_POST['rcat'] as $key=>$value)
            if ( !isValidRCat($value-1) )
                return false;

    if ($type === 1)
    {
        if (!(count($_POST['rcat']) === 0))
            return false;
    }
    else if ($type === 2)
    {
        if (!(count($_POST['gcat']) === 0 && count($_POST['pcat']) === 0))
            return false;
    }

    return true;
}

function create(& $msg) {

    $type      = typeOf();
    $c_generic = check_create_generic();

    if ( $type && $c_generic )
    {
        $v_generic = validate_product_generic();
        $v_cats    = validate_cats($type);

        if ($v_generic && $v_cats) {

            $productname = $_POST['productname'];
            $price       = $_POST['price'];
            $description = $_POST['description'];
            $url         = $_POST['url'];

            $gcats = $_POST['gcat'];
            $pcats = $_POST['pcat'];
            $rcats = $_POST['rcat'];

            $msg = createProduct($type,$productname,$price,$description,$url,$gcats,$pcats,$rcats);
        }
        else $msg = "Syntax Error! fields are not valid.";
    }
    else $msg = "Requirement Error! no required fields.";
}


function check_edit_generic() { return isset($_POST['productname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['id']); }
function check_edit_client() { return isset($_POST['name']) && isset($_POST['address']) && isset($_POST['postal']); }

function validate_product_generic_edit() {

    $regex_id       = "/^[0-9]+$/i";
    $regex_productname = "/^[a-zA-Z0-9]{2,}$/i";
    $regex_password = "/[a-zA-Z0-9]{6,}$/i";
    $regex_empty    = "/^$/i";

    return (
        preg_match($regex_id, $_POST['id'])                &&
        preg_match($regex_productname, $_POST['productname'])    &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
        (preg_match($regex_password, $_POST['password']) || preg_match($regex_empty, $_POST['password']))
    );
}

function edit(& $msg) {

    global $access;

    $c_generic = check_edit_generic();
    $c_client  = check_edit_client();

    if ( $c_generic && $c_client )
    {
        $v_generic = validate_product_generic_edit();
        $admin    = isAdminID($_POST['id']);
        $v_client  = ( !$admin ) ? validate_product_client_edit() : true;

        if ($v_generic && $v_client) {

            $id = $_POST['id'];
            $productname = $_POST['productname'];
            $email    = $_POST['email'];
            $password = ($_POST['password']==='') ? false : sha1($_POST['password']);

            if ( !$admin ) {
                $name       = $_POST['name'];
                $address    = $_POST['address'];
                $postal4_id = getPostalCodeID(substr($_POST['postal'], 0, 4));
                $postal3    = substr($_POST['postal'], 5, 7);

                $msg = editClient($id,$productname,$email,$password,$name,$address,$postal4_id,$postal3);
            }
            else {
                $msg = editAdmin($id,$productname,$email,$password);
            }
        }
        else $msg = "Syntax Error! fields are not valid.".$_POST['id']." ".$_POST['access']." ".$_POST['name'];
    }
    else $msg = "Requirement Error! no required fields.".$_POST['id']." ".$_POST['access']." ".$_POST['name'];
}


function check_active_product(){ return isset($_POST['active']) && isset($_POST['id']); }
function validate_active_product(){ return strcmp($_POST['active'],'true')==0  && is_numeric($_POST['id']); }

function active(& $msg) {
    $c_active = check_active_product();

    if ( $c_active )
    {
        $v_active = validate_active_product();

        if ( $v_active )
        {
            $id = (int) $_POST['id'];
            $msg = setProductActive($id);
        }
        else $msg = "Syntax Error! fields are not valid.".$_POST['id'];

    }
    else $msg = "Requirement Error! no required fields.";
}

function validate_inactive_product(){ return strcmp($_POST['active'],'false')==0  && is_numeric($_POST['id']); }

function inactive(& $msg) {
    $c_inactive = check_active_product();

    if ( $c_inactive )
    {
        $v_inactive = validate_inactive_product();

        if ( $v_inactive )
        {
            $id = (int) $_POST['id'];
            $msg = setProductInactive($id);
        }
        else $msg = "Syntax Error! fields are not valid.";

    }
    else $msg = "Requirement Error! no required fields.";
}

function productList(& $msg) {
    $list = getProducts();
    $msg = json_encode( $list );
}

function productData(& $msg) {
    $list = getproduct($_POST['id']);
    $msg = json_encode( $list );
}

/*
 * Main Block
 * * * * * * * */

// missing: verify session data is admin-product

if (isset($_GET['create']))
    create($msg);
else if (isset($_GET['edit']))
    /*edit($msg)*/;
else if (isset($_GET['active']))
    active($msg);
else if (isset($_GET['inactive']))
    inactive($msg);
else if (isset($_GET['list']))
    productList($msg);
else if (isset($_GET['data']))
    productData($msg);
else
    $msg = "There is no request like that available!";

echo $msg;

?>