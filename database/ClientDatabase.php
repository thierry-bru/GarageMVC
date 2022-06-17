<?php
require_once "/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/models/Client.php";
class ClientDatabase
{
    public static function create($pdo,$pClient):bool
    {
        // attention ` est IMPORTANT
        $sql="INSERT INTO CLIENT(`nom`,`prenom`,`adresse`,`email`,`telephone`)
            VALUES ('$pClient->nom','$pClient->prenom','$pClient->adresse','$pClient->email',
            '$pClient->telephone')";
         echo "sql:$sql";  
        try {
             $pdo->exec($sql);
            return true;
        } catch (PDOException $exception) {
            return false;
        }
    }

    public static function getList($pdo)
    {
        $sql = $pdo->prepare('SELECT * FROM CLIENT;');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
        
    }
}
?>