<?php

    function createClient($username,$email,$password,$name,$address,$postal4_id,$postal3) {
        global $conn;

        try {
            $conn->query("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE");
            $conn->beginTransaction();

            $stmt = $conn->prepare("INSERT INTO Utilizador(username, email, password) VALUES (?, ?, ?)");
            $stmt->execute(array($username, $email, $password));

            $stmt = $conn->prepare("SELECT id FROM Utilizador WHERE username = ?");
            $stmt->execute(array($username));
            $userid = $stmt->fetch()['id'];

            $stmt = $conn->prepare("INSERT INTO Client
                                    VALUES (?,?,?,?,?)");
            $stmt->execute(array($userid,$name,$address,$postal4_id,$postal3));

            $conn->commit();

            return "Success! Client created.";
        }
        catch (PDOException $e)
        {
            $conn->rollBack();
            errorLog("createClient",$e);
            return "DB Error! Client not created.";
        }

        return;
    }

    function createAdmin($access,$username,$email,$password) {
        global $conn;

        try {
            $conn->query("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE");
            $conn->beginTransaction();

            $stmt = $conn->prepare("INSERT INTO Utilizador(username, email, password) VALUES (?, ?, ?)");
            $stmt->execute(array($username, $email, $password));

            $stmt = $conn->prepare("SELECT id FROM Utilizador WHERE username = ?");
            $stmt->execute(array($username));
            $userid = $stmt->fetch()['id'];

            $stmt2 = $conn->prepare("INSERT INTO Admin(user_id,admin_type) VALUES (?,?)");
            $stmt2->execute(array($userid,$access));

            $conn->commit();

            return "Success! Admin created.";
        }
        catch (PDOException $e)
        {
            $conn->rollBack();
            errorLog("createAdmin",$e);
            return "DB Error! Admin not created.";
        }

        return;
    }

    function editClient($id,$username,$email,$password,$name,$address,$postal4_id,$postal3) {
        global $conn;

        try {
            $conn->query("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE");
            $conn->beginTransaction();

            if ($password === false)
            {
                $stmt = $conn->prepare("UPDATE Utilizador
                                        SET username=?, email=?
                                        WHERE id = ?");
                $stmt->execute(array($username, $email, $id));
            }
            else
            {
                $stmt = $conn->prepare("UPDATE Utilizador
                                        SET username=?, email=?, password=?
                                        WHERE id = ?");
                $stmt->execute(array($username, $email, $password, $id));
            }

            $stmt = $conn->prepare("INSERT INTO Client
                                        VALUES (?,?,?,?,?)");
            $stmt->execute(array($id,$name,$address,$postal4_id,$postal3));

            $conn->commit();

            return "Success! Client edited.";
        }
        catch (PDOException $e)
        {
            $conn->rollBack();
            errorLog("editClient",$e);
            return "DB Error! Client not edited.";
        }

        return;
    }

    function editAdmin($id,$username,$email,$password) {
        global $conn;

        try {
            $conn->query("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE");
            $conn->beginTransaction();

            if ($password === false)
            {
                $stmt = $conn->prepare("UPDATE Utilizador
                                        SET username=?, email=?
                                        WHERE id = ?");
                $stmt->execute(array($username, $email, $id));
            }
            else
            {
                $stmt = $conn->prepare("UPDATE Utilizador
                                        SET username=?, email=?, password=?
                                        WHERE id = ?");
                $stmt->execute(array($username, $email, $password, $id));
            }

            $conn->commit();

            return "Success! Admin edited.";
        }
        catch (PDOException $e)
        {
            $conn->rollBack();
            errorLog("editAdmin",$e);
            return "DB Error! Admin not edited.";
        }

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

    function isAdminID($id) {
        global $conn;

        $stmt = $conn->prepare("SELECT Utilizador.*, Admin.admin_type
                                    FROM Utilizador
                                    LEFT JOIN Admin
                                    ON Utilizador.id = Admin.user_id
                                    WHERE Utilizador.id = ?");
        $stmt->execute(array($id));

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

        $query = 'SELECT Utilizador.id, Utilizador.email, Utilizador.username, Utilizador.registered, Utilizador.online, Utilizador.active, AdminType.name as access
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

    function getUser($id) {
        global $conn;

        try {
            $query = 'SELECT Utilizador.id, Utilizador.email, Utilizador.username, Utilizador.registered, Utilizador.online, Utilizador.active, AdminType.name as access
                      FROM Utilizador
                      LEFT JOIN Admin
                      ON Utilizador.id = Admin.user_id
                      LEFT JOIN AdminType
                      ON Admin.admin_type = AdminType.id
                      WHERE Utilizador.id = ?';
            $stmt = $conn->prepare($query);
            $stmt->execute(array($id));

            return $stmt->fetch();
        }
        catch(PDOException $e){
            return "DB Error! Could not get user data. ";
        }


    }

    function setUserActive($id) {
        global $conn;

        try {
            $stmt = $conn->prepare("UPDATE utilizador
                                SET active = TRUE
                                WHERE id = ?");
            $stmt->execute(array($id));

            return "Success! User state updated.";
        }
        catch (PDOException $e)
        {
            errorLog("setUserActive",$e);
            return "DB Error! User state not updated.";
        }
    }

    function setUserInactive($id) {
        global $conn;

        try {
            $stmt = $conn->prepare("UPDATE utilizador
                                SET active = FALSE
                                WHERE id = ?");
            $stmt->execute(array($id));

            return "Success! User state updated.";
        }
        catch (PDOException $e)
        {
            errorLog("setUserInactive",$e);
            return "DB Error! User state not updated.";
        }
    }

    function getPostalCodes() {
        global $conn;

        $stmt = $conn->prepare("SELECT Postalcode.* FROM Postalcode");
        $stmt->execute();

        return $stmt->fetchAll();;
    }

    function getPostalCodeID($value) {
        global $conn;

        $stmt = $conn->prepare("SELECT Postalcode.id FROM Postalcode WHERE Postalcode.code = ?");
        $stmt->execute(array($value));

        return $stmt->fetch()['id'];
    }



?>
