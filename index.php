<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

//on instancie l'objet voiture
$twingo = new Voiture('Moutarde',943,'SP95','Renault','Twingo');
//$twingo->vitesse = 40; // quand les propriétés ne sont pas publiques les adresser avec setter
echo $twingo->calculerEnergieCinetique();
echo "<br />";
$twingo->setMasse(923);
$twingo->setVitesse(20);
echo $twingo->calculerEnergieCinetique();

//var_dump($twingo);


