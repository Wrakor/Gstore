<?php



    function createClient($username,$email,$password,$firstname,$lastname,$address,$postalcode) {
        global $conn;

        $name = $firstname.' '.$lastname;

        $stmt = $conn->prepare("INSERT INTO Utilizador(email, username, password) VALUES (?, ?, ?)");
        $stmt->execute(array($email, $username,sha1($password)));

        $stmt = $conn->prepare("SELECT id FROM Utilizador WHERE username = ?");
        $stmt->execute(array($username));

        $userid = $stmt->fetch()['id'];

        $stmt2 = $conn->prepare("INSERT INTO Client VALUES (?,?,?,?)");
        $stmt2->execute(array($userid,$name,$address,$postalcode));

        return;
    }

    function createAdmin($access,$username,$email,$password) {
        global $conn;

        $stmt = $conn->prepare("INSERT INTO Utilizador(email, username, password) VALUES (?, ?, ?)");
        $stmt->execute(array($email, $username,sha1($password)));

        $stmt = $conn->prepare("SELECT id FROM Utilizador WHERE username = ?");
        $stmt->execute(array($username));

        $userid = $stmt->fetch()['id'];

        $stmt2 = $conn->prepare("INSERT INTO Admin VALUES (?,?)");
        $stmt2->execute(array($userid,$access));

        return;
    }

    function isLoginCorrect($username, $password) {
        global $conn;

        $stmt = $conn->prepare("SELECT *
                                FROM Utilizador
                                WHERE username = ? AND password = ?");
        $stmt->execute(array($username, sha1($password)));
        return $stmt->fetch() == true;
    }

    function updatePassword($username, $password) {
        global $conn;

        $stmt = $conn->prepare("UPDATE utilizador
                                SET password= ?
                                WHERE username = ?");
        return $stmt->execute(array(sha1($password), $username));
    }

    function isAdmin($username) {
        global $conn;

        $stmt = $conn->prepare("SELECT Utilizador.*, Admin.admin_type
                                FROM Utilizador
                                LEFT JOIN Admin
                                ON Utilizador.id = Admin.user_id
                                WHERE Utilizador.username = ?");
        $stmt->execute(array($username));

        return $stmt->fetch() == true;
    }

    function getAdminTypes() {
        global $conn;

        $stmt = $conn->prepare("SELECT AdminType.*
                                FROM AdminType");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function getAdminType($name) {
        global $conn;

        $stmt = $conn->prepare("SELECT AdminType.*
                                FROM AdminType
                                WHERE AdminType.name = ?");
        $stmt->execute(array($name));

        return $stmt->fetch();
    }

    function getUsers() {
        global $conn;

        $query = 'SELECT Utilizador.*, AdminType.name as access
                  FROM Utilizador
                  LEFT JOIN Admin
                  ON Utilizador.id = Admin.user_id
                  LEFT JOIN AdminType
                  ON Admin.admin_type = AdminType.id
                  ORDER BY Utilizador.id ASC';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

?>
