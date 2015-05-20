<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');

    if (!$_POST['username'] || !$_POST['password']) {
        $_SESSION['error_messages'][] = 'Invalid login';
        $_SESSION['form_values'] = $_POST;

        exit;
    }

    //echo "<pre>"; var_dump($_POST); echo "</pre>";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isLoginCorrect($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['success_messages'][] = 'Login successful';

    } else {
        $_SESSION['error_messages'][] = 'Login failed';
    }

    header("Location: $BASE_URL".'index.php');
?>