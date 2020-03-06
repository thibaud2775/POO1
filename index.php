<?php

date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

//on instancie l'objet 
$magicien = new Magicien('Michel');



