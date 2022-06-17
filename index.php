<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/controllers/controllers.php';

if (!isset($_REQUEST['command']))
{
    afficherListeClient();

}
else
{
    switch($_REQUEST['command'])
    {
        case 'create-client':traiterFormulaire($_POST);
        break;
        case 'form-client':afficherFormulaireCreation();
        break;
        default:afficherListeClient();
    }
    
}