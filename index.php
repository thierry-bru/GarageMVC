<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/GarageMVC/controllers/controllers.php';

if (!isset($_POST['command']))
{
    afficherFormulaireCreation();
}
else
{
echo "formulaire posté";
}