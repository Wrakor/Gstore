<?php

  function createUser($firstname,$lastname,$username,$email,$password,$address,$postal_code) {
    global $conn;

    $name_comp = $firstname.' '.$lastname;
    $stmt = $conn->prepare("INSERT INTO Utilizador(email, username, password) VALUES (?, ?, ?)");
    $stmt->execute(array($email, $username,sha1($password)));

 
    $stmt = $conn->prepare("SELECT id FROM Utilizador WHERE username = ?");
    $stmt->execute(array($username));
    $row = $stmt->fetch();
    $user_id = $row['id'];


    $stmt2 = $conn->prepare("INSERT INTO Client VALUES (?,?,?,?)");
    $stmt2->execute(array($user_id,$name_comp,$address,$postal_code));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM Utilizador 
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, $password/*sha1($password)*/));
    return $stmt->fetch() == true;
  }


function updatePassword($username, $password) {
    global $conn;
    $stmt = $conn->prepare("UPDATE utilizador
                            SET password= ?
                            WHERE username = ?");
    return $stmt->execute(array($password, $username/*sha1($password)*/));
}


?>
