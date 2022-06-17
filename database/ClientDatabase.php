<?php
require_once "/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/models/Client.php";
class ClientDatabase
{
    public static function create($pdo,$pClient):bool
    {
        try {
            $sql="INSERT INTO CLIENT('nom','prenom','adresse','email','telephone')
            VALUES ($pClient->nom,$pClient->prenom,$pClient->adresse,$pClient->email,$pClient->telephone)";
            $pdo->exec($sql);
            return true;
        } catch (PDOException $exception) {
            return false;
        }
    }
}
?>