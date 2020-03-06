<?php

class Vehicule
{
    protected $vitesse = 0;
    protected $masse;
    protected $energie;


    public function calculerEnergieCinetique(): float
    {
        return 0.5 * $this->masse * $this->vitesse ** 2;
    }
}
