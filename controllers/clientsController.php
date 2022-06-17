<?php
require_once "/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/models/Client.php";
require_once "/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/database/database.php";
function afficherFormulaireCreation()
{
    require_once '/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/views/clients/template_formulaire.php';
}
function traiterFormulaire($post)
{
    $client = new Client(0,$post['nom'],$post['prenom'],$post['adresse'],$post['email'],$post['telephone']);
    $pdo = pdo_connect();
    ClientDatabase::create($pdo,$client);
    echo "traité!";

}
?>