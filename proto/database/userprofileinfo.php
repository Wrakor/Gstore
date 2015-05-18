<?php
function getUserInfo($username){
    global $conn;
    $query ='SELECT utilizador.username as username, utilizador.id as userid, utilizador.email as email, client.name as name, client.address as address, postalcode.code as postalcode, city.name as city, district.name as district  FROM client, utilizador, postalcode, city, district
WHERE utilizador.username=? AND utilizador.id = client.user_id AND client.postalcode = postalcode.id AND city.id = postalcode.city_id AND district.id = city.district_id ';

    $stmt = $conn->prepare($query);

    $stmt->execute(array($username));

    return $stmt->fetchAll();

}
?>