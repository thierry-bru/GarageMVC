<?php

function pdo_connect()
{
    $host='localhost';
    $user= 'root'; // toujours créer un utilisateur spécifique avec les droits les plus limités possible
    // par exemple désactiver la commande drop table, drop database...
    $password='';
    $name="garage";
    try {
        return new PDO("mysql:host=$host;dbname=$name;charset=utf8",$user,$password);
    } catch (PDOException $exception) {
        echo $exception->getMessage();
        die('CONNECTION ECHOUEE !');
    }
}
?>