<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

//on instancie l'objet voiture
$twingo = new Voiture('Moutarde',943,'SP95','Renault','Twingo');
$twingo->vitesse = 40;
echo $twingo->calculerEnergieCinetique();
echo "<br />";
$twingo->masse -=20;
$twingo->vitesse = 20;
echo $twingo->calculerEnergieCinetique();

//var_dump($twingo);


