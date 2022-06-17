<?php
class Client
{
    public $numeroClient;
    public $nom;
    public $prenom;
    public $adresse;
    public $email;
    public $telephone;

    public function __construct($pNumeroClient,$pNom,$pPrenom,$pAdresse,$pEmail,$pTelephone)
    {
        $this->numeroClient=$pNumeroClient;
        $this->nom=$pNom;
        $this->prenom=$pPrenom;
        $this->adresse=$pAdresse;
        $this->email=$pEmail;
        $this->telephone=$pTelephone;
    }
}
