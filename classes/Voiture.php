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
    public $modele

    public function __construct(string $c,int $m, string $e, string $mq, string $mod)
    {
        $this->couleur = $c;
        $this->masse = $m;
        $this->energie= $e;
        $this->marque = $m;
        $this->modele = $mod;
    }
    public function getCouleur(): string {
        return $this->couleur;
    }
    public function setCouleur($value) : void {
        $this->couleur = $value;
    }
    public function getMasse(): int {
        return $this->masser;
    }
    public function setMasse($value) : void {
        $this->masse = $value;
    }

    public function getEnergie(): string {
        return $this->energie;
    }
    public function setEnergie($value) : void {
        $this->energie = $value;
    }
    public function getMarque(): string {
        return $this->marque;
    }
    public function setMarque($value) : void {
        $this->marque = $value;
    }
    public function getModele(): string {
        return $this->modele;
    }
    public function setModele($value) : void {
        $this->mmodele = $value;
    }

    public function __destruct()
    {
        echo '<p>ta caisse est moche</p>';
    }
}