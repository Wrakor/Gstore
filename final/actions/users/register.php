<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (
      !$_POST['display_name'] ||
      !$_POST['first_name'] ||
      !$_POST['last_name'] ||
      !$_POST['password'] ||
      !$_POST['email'] ||
      !$_POST['address'] ||
      !$_POST['password_confirmation'])
  {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;

    header("Location: $BASE_URL" . 'index.php#regist');
    exit;
  }

  $first_name = strip_tags($_POST['first_name']);
  $last_name = strip_tags($_POST['last_name']);
  $username = strip_tags($_POST['display_name']);
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];
  $email = strip_tags($_POST['email']);
  $address = strip_tags($_POST['address']);
  $postalcode = strip_tags($_POST['postalcodeform']);
  $postalcodeext = strip_tags($_POST['postalextform']);

  try
  {
      createUser($first_name,$last_name,$username, $email, $password, $address, $postalcode,$postalcodeext);
  }
  catch (PDOException $e)
  {
  
    if (strpos($e->getMessage(), 'users_pkey') !== false)
    {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';
    
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'index.php#registerror');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully'; 
  $message2 = "Registado!";

  //echo "<script type='text/javascript'>alert('$message2');</script>";

  header("Location: $BASE_URL".'index.php#registed');
?>