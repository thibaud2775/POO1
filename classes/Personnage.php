<?php

abstract class Personnage
{
    protected $nom;
    protected $pointsVie;
    protected $endurance;
    protected $intelligence;
    protected $force;
    protected $defense;
    protected $experience;

    protected function attaquer($autrePersonnage)
    {
        $autrePersonnage->pointsVie -= $this->force - $autrePersonnage->defense
            * rand(0, $autrePersonnage->defense - 1);
        $this->experience++;
        DeadFactory::isDead($autrePersonnage);
    }

   
}
