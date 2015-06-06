<?php

  function createUser($firstname,$lastname,$username,$email,$password,$address,$postal_code,$postal_code_ext) {
    global $conn;


    $name_comp = $firstname.' '.$lastname;
    $stmt = $conn->prepare("INSERT INTO Utilizador(email, username, password) VALUES (?, ?, ?)");
    $stmt->execute(array($email, $username,sha1($password)));

 
    $stmt = $conn->prepare("SELECT id FROM utilizador WHERE username = ?");
    $stmt->execute(array($username));
    $row = $stmt->fetch();
    $user_id = $row['id'];

      $stmt = $conn->prepare("SELECT id FROM postalcode WHERE code = ?");
      $stmt->execute(array($postal_code));
      $row = $stmt->fetch();
      $postal_id = $row['id'];

    $stmt2 = $conn->prepare("INSERT INTO client VALUES (?,?,?,?,?)");
    $stmt2->execute(array($user_id,$name_comp,$address,$postal_id,$postal_code_ext));

  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM Utilizador WHERE username = ? AND password = ?");
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


function getDistrict($city){
    global $conn;
    $stmt = $conn->prepare("SELECT district_id FROM city WHERE name=?");
    $stmt->execute(array($city));
    $row = $stmt->fetch();
    $district_id = $row['district_id'];

    $stmt = $conn->prepare("SELECT name FROM district WHERE id=?");
    $stmt->execute(array($district_id));

    return json_encode($stmt->fetchAll());

}

function getCity($postalcode){
    global $conn;
    $stmt = $conn->prepare("SELECT city_id FROM postalcode WHERE code = ?");
    $stmt->execute(array($postalcode));
    $row = $stmt->fetch();
    $cityid = $row['city_id'];

    $stmt = $conn->prepare("SELECT name FROM city WHERE id=?");
    $stmt->execute(array($cityid));
    return json_encode($stmt->fetchAll());

}




function getPostalCodes(){
    global $conn;
    $stmt = $conn->prepare("SELECT code FROM postalcode ORDER BY code");
    $stmt->execute();
    return json_encode($stmt->fetchAll());

}


function checkEmail($email){
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(email) as cnt FROM utilizador where email=?");
    $stmt->execute(array($email));
    $row = $stmt->fetch();
    return $row['cnt'];
}

function checkUsername($usr){
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(username) as cnt from utilizador WHERE username=?");
    $stmt->execute(array($usr));
    $row = $stmt->fetch();
    return $row['cnt'];
}

function checkOldPassword($usr,$password){
    global $conn;
    $stmt = $conn->prepare("SELECT password from utilizador WHERE username=?");
    $stmt->execute(array($usr));
    $row = $stmt->fetch();
    $currpassword = $row['password'];


   if(/*sha1($password)*/ $password == $currpassword){
        return 1 ;
    }else return 0;
}

?>
