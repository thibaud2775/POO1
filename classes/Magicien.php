<?php

class Magicien extends Personnage {
    public $pointsMagie;

    public function __construct($n, $pdv, $end,$int, $force, $def, $exp)
    {
        $this->nom = $n;
        $this->pointsVie = rand(5,8);
        $this->endurance = rand(1,4);
        $this->intelligence = rand(7,10);
        $this->force = rand(1,5);
        $this->defense = rand(3,6);
        $this->experience= rand(0,10);
    }

}