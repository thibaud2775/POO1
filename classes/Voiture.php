<?php

// par convention les fichiers qui contiennent des classes ont un Nom qui commence par majuscule

class Voiture 
{
    public $couleur;
    public $vitesse = 0;
    public $masse;
    public $nbrRoues = 4;
    public $energie;
    public $marque;
    public $modele;

    public function __construct(string $c)
    {
        $this->couleur = $c;
    }
    public function __destruct()
    {
        echo '<p>ta caisse est moche</p>';
    }
}