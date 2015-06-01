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


function getDistrict(){
    global $conn;
    $stmt = $conn->prepare("SELECT name FROM district");
    $stmt->execute();
    return json_encode($stmt->fetchAll());

}

function getCities($district){
    global $conn;
    $stmt = $conn->prepare("SELECT id FROM district WHERE name = ?");
    $stmt->execute(array($district));
    $row = $stmt->fetch();
    $district_id = $row['id'];

    $stmt = $conn->prepare("SELECT name FROM city WHERE district_id=?");
    $stmt->execute(array($district_id));
    return json_encode($stmt->fetchAll());

}




function getCityPostalCodes($city){
    global $conn;
    $stmt = $conn->prepare("SELECT id FROM city WHERE name = ?");
    $stmt->execute(array($city));
    $row = $stmt->fetch();
    $city_id = $row['id'];

    $stmt = $conn->prepare("SELECT code FROM postalcode WHERE city_id=?");
    $stmt->execute(array($city_id));
    return json_encode($stmt->fetchAll());

}

?>
