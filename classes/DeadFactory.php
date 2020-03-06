<?php

class DeadFactory
{
    public static function isDead(object $personnage)
    {
        if ($personnage->PointsVie <= 0) {
            $personnage->mort = true;
        }
    }
}
